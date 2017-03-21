<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmItem */

$this->title = 'Create Farm Item';
$this->params['breadcrumbs'][] = ['label' => 'Farm Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
