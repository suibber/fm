<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FarmLandMessage */

$this->title = 'Create Farm Land Message';
$this->params['breadcrumbs'][] = ['label' => 'Farm Land Messages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="farm-land-message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
