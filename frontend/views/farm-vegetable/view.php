<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FarmVegetable */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Farm Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-vegetable-view">

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
            'sow_date_start',
            'sow_date_end',
            'except_days',
            'name',
            'intra:ntext',
            'except_production',
            'viewer_num',
            'collect_num',
            'price',
        ],
    ]) ?>

</div>
