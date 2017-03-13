<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmVegetableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Vegetables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-vegetable-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Vegetable', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'sow_date_start',
            'sow_date_end',
            'except_days',
            'name',
            // 'intra:ntext',
            // 'except_production',
            // 'viewer_num',
            // 'collect_num',
            // 'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
