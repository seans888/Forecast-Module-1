<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Roomnightssold */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomnightssold-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gRateRNS')->textInput() ?>

    <?= $form->field($model, 'actualRNS')->textInput() ?>

    <?= $form->field($model, 'budgetRNS')->textInput() ?>

    <?= $form->field($model, 'lastYearRNS')->textInput() ?>

    <?= $form->field($model, 'room_has_monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
