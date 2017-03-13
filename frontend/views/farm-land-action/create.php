<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmLandAction */

$this->title = 'Create Farm Land Action';
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-action-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
