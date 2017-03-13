<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FarmLandAction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="farm-land-action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'land_id')->textInput() ?>

    <?= $form->field($model, 'vegetable_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'do_time')->textInput() ?>

    <?= $form->field($model, 'do_user')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
