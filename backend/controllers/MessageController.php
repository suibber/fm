<?php

namespace backend\controllers;

use Yii;
use common\models\FarmArticle;
use common\models\FarmArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;
use common\models\FarmMessage;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class MessageController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    public function actionIndex($id=0)
    {   
        return $this->render('index',[
            'land_id' => $id,
        ]); 
    }

    public function actionCreate()
    {
        $message = new FarmMessage();
        $message->user_id = 0;
        $message->user_name = '';
        $message->message = json_encode($_GET);
        $message->save();
        $echo = '已提交，我们将会尽快与您联系~';
        return $this->render('create',[
            'return' => $echo,
        ]); 
    }
}
