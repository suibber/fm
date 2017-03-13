<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmLandVegetable */

$this->title = 'Create Farm Land Vegetable';
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-vegetable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
