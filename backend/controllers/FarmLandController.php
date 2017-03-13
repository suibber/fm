<?php

namespace backend\controllers;

use Yii;
use common\models\FarmLand;
use common\models\FarmLandSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class FarmLandController extends BaseController
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
        $page =  BaseController::processPaging();
        $farmlands = FarmLand::getFarmlands($page);
        $total_page = FarmLand::getFarmlandsTotlePage();
        return $this->render('index',[
            'farmlands' => $farmlands,
            'total_page' => $total_page,
        ]); 
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

    protected function findModel($id)
    {
        if (($model = FarmLand::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
