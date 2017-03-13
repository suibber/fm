<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLandSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="farm-land-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'owner') ?>

    <?= $form->field($model, 'is_real') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'land_parent') ?>

    <?php // echo $form->field($model, 'land_name') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'intra') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'create_user') ?>

    <?php // echo $form->field($model, 'viewer_num') ?>

    <?php // echo $form->field($model, 'collect_num') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
