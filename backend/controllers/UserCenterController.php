<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class UserCenterController extends BaseController
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

    public function actionIndex()
    {   
        $is_guest = Yii::$app->user->isGuest;
        if ($is_guest) {
            header("Location:/wechat/user");
            exit;
        } else {
            $user_id = Yii::$app->user->id;
            $user_info = User::findOne($user_id);
            return $this->render('index',[
                'user_info' => $user_info,
            ]); 
        }
    }

    /**
     * Displays a single FarmArticle model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

}
