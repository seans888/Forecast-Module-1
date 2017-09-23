<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\roomflash */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomflash-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomOtherActual')->textInput() ?>

    <?= $form->field($model, 'roomAvailableActual')->textInput() ?>

    <?= $form->field($model, 'roomIndividualLF')->textInput() ?>

    <?= $form->field($model, 'roomGroupLF')->textInput() ?>

    <?= $form->field($model, 'roomOtherLF')->textInput() ?>

    <?= $form->field($model, 'roomAvailableLF')->textInput() ?>

    <?= $form->field($model, 'roomSoldLF')->textInput() ?>

    <?= $form->field($model, 'roomIndividualBudget')->textInput() ?>

    <?= $form->field($model, 'roomGroupBudget')->textInput() ?>

    <?= $form->field($model, 'roomOtherBudget')->textInput() ?>

    <?= $form->field($model, 'roomAvailableBudget')->textInput() ?>

    <?= $form->field($model, 'roomSoldBudget')->textInput() ?>

    <?= $form->field($model, 'roomIndividualLY')->textInput() ?>

    <?= $form->field($model, 'roomGroupLY')->textInput() ?>

    <?= $form->field($model, 'roomOtherLY')->textInput() ?>

    <?= $form->field($model, 'roomAvailableLY')->textInput() ?>

    <?= $form->field($model, 'roomSoldLY')->textInput() ?>

    <?= $form->field($model, 'roomRevenueActual')->textInput() ?>

    <?= $form->field($model, 'roomIndividualActual')->textInput() ?>

    <?= $form->field($model, 'roomGroupActual')->textInput() ?>

    <?= $form->field($model, 'roomSoldActual')->textInput() ?>

    <?= $form->field($model, 'occupancyActual')->textInput() ?>

    <?= $form->field($model, 'adrActual')->textInput() ?>

    <?= $form->field($model, 'roomRevParActual')->textInput() ?>

    <?= $form->field($model, 'roomRevenueLF')->textInput() ?>

    <?= $form->field($model, 'occupancyLF')->textInput() ?>

    <?= $form->field($model, 'adrLF')->textInput() ?>

    <?= $form->field($model, 'roomRevParLF')->textInput() ?>

    <?= $form->field($model, 'roomRevenueBudget')->textInput() ?>

    <?= $form->field($model, 'occupancyBudget')->textInput() ?>

    <?= $form->field($model, 'adrBudget')->textInput() ?>

    <?= $form->field($model, 'roomRevParBudget')->textInput() ?>

    <?= $form->field($model, 'roomRevenueLY')->textInput() ?>

    <?= $form->field($model, 'occupancyLY')->textInput() ?>

    <?= $form->field($model, 'adrLY')->textInput() ?>

    <?= $form->field($model, 'roomRevParLY')->textInput() ?>

    <?= $form->field($model, 'roomRevenueVVB')->textInput() ?>

    <?= $form->field($model, 'roomIndividualVVB')->textInput() ?>

    <?= $form->field($model, 'roomGroupVVB')->textInput() ?>

    <?= $form->field($model, 'roomOtherVVB')->textInput() ?>

    <?= $form->field($model, 'roomAvailableVVB')->textInput() ?>

    <?= $form->field($model, 'roomSoldVVB')->textInput() ?>

    <?= $form->field($model, 'occupancyVVB')->textInput() ?>

    <?= $form->field($model, 'adrVVB')->textInput() ?>

    <?= $form->field($model, 'roomRevParVVB')->textInput() ?>

    <?= $form->field($model, 'roomRevenueVVLY')->textInput() ?>

    <?= $form->field($model, 'roomIndividualVVLY')->textInput() ?>

    <?= $form->field($model, 'roomGroupVVLY')->textInput() ?>

    <?= $form->field($model, 'roomOtherVVLY')->textInput() ?>

    <?= $form->field($model, 'roomAvailableVVLY')->textInput() ?>

    <?= $form->field($model, 'roomSoldVVLY')->textInput() ?>

    <?= $form->field($model, 'occupancyVVLY')->textInput() ?>

    <?= $form->field($model, 'adrVVLY')->textInput() ?>

    <?= $form->field($model, 'roomRevParVVLY')->textInput() ?>

    <?= $form->field($model, 'monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
