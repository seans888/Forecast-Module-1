<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomsegmentation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actualRNS')->textInput() ?>

    <?= $form->field($model, 'budgetRNS')->textInput() ?>

    <?= $form->field($model, 'lastYearRNS')->textInput() ?>

    <?= $form->field($model, 'actualARR')->textInput() ?>

    <?= $form->field($model, 'budgetARR')->textInput() ?>

    <?= $form->field($model, 'lastYearARR')->textInput() ?>

    <?= $form->field($model, 'growthRateRNS')->textInput() ?>

    <?= $form->field($model, 'growthRateARR')->textInput() ?>

    <?= $form->field($model, 'actualR')->textInput() ?>

    <?= $form->field($model, 'budgetR')->textInput() ?>

    <?= $form->field($model, 'lastYearR')->textInput() ?>

    <?= $form->field($model, 'growthRateR')->textInput() ?>

    <?= $form->field($model, 'monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
