<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FarmMessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Farm Messages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-message-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Farm Message', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'user_name',
            'message',
            'return_message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
