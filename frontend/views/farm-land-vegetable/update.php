<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLandVegetable */

$this->title = 'Update Farm Land Vegetable: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="farm-land-vegetable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
