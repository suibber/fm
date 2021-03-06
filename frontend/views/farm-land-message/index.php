<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmLandMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Land Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Land Message', ['create'], ['class' => 'btn btn-success']) ?>
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
            'from_user',
            // 'create_time',
            // 'update_time',
            // 'message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
