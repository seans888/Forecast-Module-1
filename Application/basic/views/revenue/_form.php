<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Revenue */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="revenue-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gRateRev')->textInput() ?>

    <?= $form->field($model, 'actualRev')->textInput() ?>

    <?= $form->field($model, 'budgetRev')->textInput() ?>

    <?= $form->field($model, 'lastYearRev')->textInput() ?>

    <?= $form->field($model, 'room_has_monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
