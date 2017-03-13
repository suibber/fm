<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmLandActionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Land Actions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-action-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Land Action', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'land_id',
            'vegetable_id',
            'status',
            'type',
            // 'create_time',
            // 'do_time',
            // 'do_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
