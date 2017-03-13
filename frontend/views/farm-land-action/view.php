<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLandAction */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-action-view">

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
            'land_id',
            'vegetable_id',
            'status',
            'type',
            'create_time',
            'do_time',
            'do_user',
        ],
    ]) ?>

</div>
