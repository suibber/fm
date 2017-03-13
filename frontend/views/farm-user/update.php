<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FarmUser */

$this->title = 'Update Farm User: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Farm Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="farm-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
