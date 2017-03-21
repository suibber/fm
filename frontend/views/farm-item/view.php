<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FarmItem */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Farm Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'display_order',
            'store_num',
            'sold_num',
            'real_price',
            'sale_price',
            'title',
            'content:ntext',
            'icon',
        ],
    ]) ?>

</div>
