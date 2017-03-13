<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmLandVegetableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Land Vegetables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-vegetable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Land Vegetable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'status',
            'land_id',
            'vegetable_id',
            // 'intra',
            // 'create_time',
            // 'update_time',
            // 'sow_time',
            // 'except_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
