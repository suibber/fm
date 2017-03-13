<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FarmVegetable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="farm-vegetable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sow_date_start')->textInput() ?>

    <?= $form->field($model, 'sow_date_end')->textInput() ?>

    <?= $form->field($model, 'except_days')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'intra')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'except_production')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viewer_num')->textInput() ?>

    <?= $form->field($model, 'collect_num')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
