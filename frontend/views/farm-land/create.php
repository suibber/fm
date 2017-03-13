<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmLand */

$this->title = 'Create Farm Land';
$this->params['breadcrumbs'][] = ['label' => 'Farm Lands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
