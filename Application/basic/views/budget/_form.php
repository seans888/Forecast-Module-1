<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Budget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="budget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomsRevenue')->textInput() ?>

    <?= $form->field($model, 'roomsIndividual')->textInput() ?>

    <?= $form->field($model, 'roomsGroup')->textInput() ?>

    <?= $form->field($model, 'roomsOthers')->textInput() ?>

    <?= $form->field($model, 'roomsAvailable')->textInput() ?>

    <?= $form->field($model, 'roomsSold')->textInput() ?>

    <?= $form->field($model, 'occupancy')->textInput() ?>

    <?= $form->field($model, 'adr')->textInput() ?>

    <?= $form->field($model, 'roomsRevPar')->textInput() ?>

    <?= $form->field($model, 'monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
