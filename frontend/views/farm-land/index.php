<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmLandSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Lands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Land', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'type',
            'status',
            'owner',
            'is_real',
            // 'location',
            // 'land_parent',
            // 'land_name',
            // 'title',
            // 'intra:ntext',
            // 'price',
            // 'create_time',
            // 'update_time',
            // 'create_user',
            // 'viewer_num',
            // 'collect_num',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
