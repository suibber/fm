<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLand */

$this->title = 'Update Farm Land: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Farm Lands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="farm-land-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
