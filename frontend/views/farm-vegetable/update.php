<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FarmVegetable */

$this->title = 'Update Farm Vegetable: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Farm Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="farm-vegetable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
