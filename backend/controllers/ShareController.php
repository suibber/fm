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
class ShareController extends BaseController
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
        $type = FarmArticle::TYPE_SHARE;        
        $page =  BaseController::processPaging();
        $articles = FarmArticle::getArticles($page, $type);
        $total_page = FarmArticle::getArticlesTotlePage();
        return $this->render('index',[
            'articles' => $articles,
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
        if (($model = FarmArticle::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
