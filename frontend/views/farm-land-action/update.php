<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLandAction */

$this->title = 'Update Farm Land Action: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="farm-land-action-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
