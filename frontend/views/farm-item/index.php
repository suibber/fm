<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'display_order',
            'store_num',
            'sold_num',
            'real_price',
            // 'sale_price',
            // 'title',
            // 'content:ntext',
            // 'icon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
