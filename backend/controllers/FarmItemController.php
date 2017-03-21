<?php

namespace backend\controllers;

use Yii;
use common\models\FarmItem;
use common\models\FarmItemSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\controllers\BaseController;

/**
 * FarmArticleController implements the CRUD actions for FarmArticle model.
 */
class FarmItemController extends BaseController
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
        $farmitems = FarmItem::getFarmItems($page);
        $total_page = FarmItem::getFarmItemsTotlePage();
        return $this->render('index',[
            'farmitems' => $farmitems,
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
        if (($model = FarmItem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
