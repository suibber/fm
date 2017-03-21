<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FarmItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="farm-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'display_order')->textInput() ?>

    <?= $form->field($model, 'store_num')->textInput() ?>

    <?= $form->field($model, 'sold_num')->textInput() ?>

    <?= $form->field($model, 'real_price')->textInput() ?>

    <?= $form->field($model, 'sale_price')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(common\redactor\widgets\Redactor::className())?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
