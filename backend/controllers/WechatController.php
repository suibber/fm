<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;
use common\models\User;
use vendor\wechat;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class WechatController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex(){
        // 第一次接入微信，做验证
        if( Yii::$app->request->get("echostr") ){
            echo Yii::$app->request->get("echostr");
            exit;
        }
        Yii::trace("Get message from wechat.");
        $this->responseMsg();
    }

    private function responseMsg(){
        // get post data, May be due to the different environments
        $postStr = isset($GLOBALS["HTTP_RAW_POST_DATA"]) ? $GLOBALS["HTTP_RAW_POST_DATA"] : '';
        if( !$postStr ){
            throw new BadRequestHttpException('无权限访问该页面！');
            exit;
        }

          // extract post data
        if (!empty($postStr)){
                libxml_disable_entity_loader(true);
                  $postObj        = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername   = $postObj->FromUserName;   // 微信用户ID
                $toUsername     = $postObj->ToUserName;     // 开发者账号
                $keyword        = trim($postObj->Content);  // 用户输入信息
                $time           = $postObj->CreateTime;     // 请求时间
                $msgtype        = $postObj->MsgType;        // 请求类型
                $event          = $postObj->Event ? $postObj->Event : '';   // 事件类型

                $re_contentStr  = '';                       // 返回消息
                $re_time        = time();                   // 返回时间
                $re_msgType     = "text";                   // 返回消息类型
                // 返回消息模板
                $re_textTpl     = "
                                <xml>
                                <ToUserName><![CDATA[%s]]></ToUserName>
                                <FromUserName><![CDATA[%s]]></FromUserName>
                                <CreateTime>%s</CreateTime>
                                <MsgType><![CDATA[%s]]></MsgType>
                                <Content><![CDATA[%s]]></Content>
                                <FuncFlag>0</FuncFlag>
                                </xml>
                "; 

                // 创建对象：用户微信行为
                $WeichatErweimaLog  = new WeichatBase();

                // 如果是消息类型
                if( $msgtype == 'text' ){
                    $re_contentStr  = $WeichatErweimaLog->autoResponseByKeyword($fromUsername,$keyword);
                    // 1.任务搜索结果 返回图文消息
                    if( strpos($re_contentStr,'>') ){
                        $re_msgType     = 'news';
                        $re_textTpl     = "
                            <xml>
                            <ToUserName><![CDATA[%s]]></ToUserName>
                            <FromUserName><![CDATA[%s]]></FromUserName>
                            <CreateTime>%s</CreateTime>
                            <MsgType><![CDATA[%s]]></MsgType>
                            
                                %s
                            
                            </xml>        
                        ";
                    // 2.无结果
                    }elseif(!$re_contentStr){
                        $re_contentStr  = $WeichatErweimaLog->autoResponseByUnknownMsg();
                    // 3.命中关键字
                    }else{
                        $re_contentStr;
                    }
                // 如果是事件类型
                }else{
                    // 如果是扫描二维码，之前用户已关注
                    if( $event == 'SCAN' ){
                        // 获取二维码的返回值
                        $Ticket   = $postObj->Ticket ? $postObj->Ticket : '';
                        $re_contentStr  = $this->getReturnMsgByTicket($Ticket,$fromUsername,0);
                    // 如果是扫描二维码，之前用户未关注
                    }elseif( $event == 'subscribe' ){
                        // 获取二维码的返回值
                        $Ticket   = $postObj->Ticket ? $postObj->Ticket : '';
                        if( $Ticket ){
                            $re_contentStr  = $this->getReturnMsgByTicket($Ticket,$fromUsername,1);
                            // 扫描关注
                            $has_followed   = $WeichatErweimaLog->hasFollowed($fromUsername);
                            if( !$has_followed ){
                                if($fromUsername){
                                    $WeichatErweimaLog->saveEventLog($fromUsername,1);  // 1表示关注事件
                                }
                            }
                        }else{
                           // 单纯的关注事件
                           $re_contentStr  = $WeichatErweimaLog->autoResponseByFollowaction(); 
                            // 保存数据
                            if($fromUsername){
                                $WeichatErweimaLog->saveEventLog($fromUsername,1);  // 1表示关注事件
                            }
                        }
                    // 取消关注事件
                    }elseif( $event == 'unsubscribe' ){
                        // 保存数据
                        if($fromUsername){
                            $WeichatErweimaLog->saveEventLog($fromUsername,2);  // 2表示取消关注事件
                        }
                    }else{
                        $re_contentStr  = $WeichatErweimaLog->autoResponseByKeyword($fromUsername,$keyword);
                    }
                }
                $resultStr = sprintf($re_textTpl, $fromUsername, $toUsername, $re_time, $re_msgType, $re_contentStr);
                echo $resultStr;
        }else {
            // 没有POST参数过来
            echo "access denied";
            exit;
        }
        
    }


    public function actionUserNew()
    {
        $code = Yii::$app->request->get('code');
        $state = Yii::$app->request->get('state');
        $appid = 'wxb411afddd1a71801';
        $secret = '2205a881b8e28e8a7be00b601b44782a';

        if (!$code) {
            $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb411afddd1a71801&redirect_uri=http%3A%2F%2Ffarm.lianjievip.com%2Fwechat%2Fuser-new&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
            header("Location:$url");
            exit;
        } elseif ($code) {
            $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
            $content = file_get_contents($url);
            $content = json_decode($content);
            $access_token = $content->access_token;
            $openid = $content->openid;
            $user_url = "https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
            $user_info = file_get_contents($user_url);
            $user_info = json_decode($user_info);
            $user = User::getUserInfoByOpenid($openid);
            $user->wechat_name = $user_info->nickname;
            $user->wechat_head = $user_info->headimgurl;
            $user->sex = $user_info->sex;
            $user->city = $user_info->city;
            $user->province = $user_info->province;
            $user->country = $user_info->country;
            if ($user->save()) {
                $user_info = User::getUserInfoByOpenid($openid);
                Yii::$app->user->login($user_info);
                header("Location:/farm-article");
                exit;
            }
        }
    }

    public function actionUser()
    {
        $code = Yii::$app->request->get('code');
        $state = Yii::$app->request->get('state');
        $appid = 'wxb411afddd1a71801';
        $secret = '2205a881b8e28e8a7be00b601b44782a';

        if (!$code) {
            $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb411afddd1a71801&redirect_uri=http%3A%2F%2Ffarm.lianjievip.com%2Fwechat%2Fuser&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
            header("Location:$url");
            exit;
        } elseif ($code) {
            $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
            $content = file_get_contents($url);
            $content = json_decode($content);
            $openid = $content->openid;
            $user_info = User::getUserInfoByOpenid($openid);
            if (isset($user_info->wechat_name) && $user_info->wechat_name) {
                Yii::$app->user->login($user_info);
                header("Location:/farm-article");
                exit;
            } else {
                if (!$user_info) {
                    $user = new User;
                    $user->wechat_openid = $content->openid;
                    $user->email = $content->openid.'@126.com';
                    $user->username = $user->wechat_openid;
                    $user->save();
                }
                header("Location:/wechat/user-new");
                exit;
            }
        }
    }
}
