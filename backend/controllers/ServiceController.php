<?php

namespace backend\controllers;

use Yii;
use common\models\FarmArticle;
use common\models\FarmArticleSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class ServiceController extends BaseController
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
        return $this->render('index',[
        ]); 
    }
}
