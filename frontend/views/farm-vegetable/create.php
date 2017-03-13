<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmVegetable */

$this->title = 'Create Farm Vegetable';
$this->params['breadcrumbs'][] = ['label' => 'Farm Vegetables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-vegetable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
