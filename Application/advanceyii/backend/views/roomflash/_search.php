<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\roomflashSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomflash-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'roomOtherActual') ?>

    <?= $form->field($model, 'roomAvailableActual') ?>

    <?= $form->field($model, 'roomIndividualLF') ?>

    <?= $form->field($model, 'roomGroupLF') ?>

    <?php // echo $form->field($model, 'roomOtherLF') ?>

    <?php // echo $form->field($model, 'roomAvailableLF') ?>

    <?php // echo $form->field($model, 'roomSoldLF') ?>

    <?php // echo $form->field($model, 'roomIndividualBudget') ?>

    <?php // echo $form->field($model, 'roomGroupBudget') ?>

    <?php // echo $form->field($model, 'roomOtherBudget') ?>

    <?php // echo $form->field($model, 'roomAvailableBudget') ?>

    <?php // echo $form->field($model, 'roomSoldBudget') ?>

    <?php // echo $form->field($model, 'roomIndividualLY') ?>

    <?php // echo $form->field($model, 'roomGroupLY') ?>

    <?php // echo $form->field($model, 'roomOtherLY') ?>

    <?php // echo $form->field($model, 'roomAvailableLY') ?>

    <?php // echo $form->field($model, 'roomSoldLY') ?>

    <?php // echo $form->field($model, 'roomRevenueActual') ?>

    <?php // echo $form->field($model, 'roomIndividualActual') ?>

    <?php // echo $form->field($model, 'roomGroupActual') ?>

    <?php // echo $form->field($model, 'roomSoldActual') ?>

    <?php // echo $form->field($model, 'occupancyActual') ?>

    <?php // echo $form->field($model, 'adrActual') ?>

    <?php // echo $form->field($model, 'roomRevParActual') ?>

    <?php // echo $form->field($model, 'roomRevenueLF') ?>

    <?php // echo $form->field($model, 'occupancyLF') ?>

    <?php // echo $form->field($model, 'adrLF') ?>

    <?php // echo $form->field($model, 'roomRevParLF') ?>

    <?php // echo $form->field($model, 'roomRevenueBudget') ?>

    <?php // echo $form->field($model, 'occupancyBudget') ?>

    <?php // echo $form->field($model, 'adrBudget') ?>

    <?php // echo $form->field($model, 'roomRevParBudget') ?>

    <?php // echo $form->field($model, 'roomRevenueLY') ?>

    <?php // echo $form->field($model, 'occupancyLY') ?>

    <?php // echo $form->field($model, 'adrLY') ?>

    <?php // echo $form->field($model, 'roomRevParLY') ?>

    <?php // echo $form->field($model, 'roomRevenueVVB') ?>

    <?php // echo $form->field($model, 'roomIndividualVVB') ?>

    <?php // echo $form->field($model, 'roomGroupVVB') ?>

    <?php // echo $form->field($model, 'roomOtherVVB') ?>

    <?php // echo $form->field($model, 'roomAvailableVVB') ?>

    <?php // echo $form->field($model, 'roomSoldVVB') ?>

    <?php // echo $form->field($model, 'occupancyVVB') ?>

    <?php // echo $form->field($model, 'adrVVB') ?>

    <?php // echo $form->field($model, 'roomRevParVVB') ?>

    <?php // echo $form->field($model, 'roomRevenueVVLY') ?>

    <?php // echo $form->field($model, 'roomIndividualVVLY') ?>

    <?php // echo $form->field($model, 'roomGroupVVLY') ?>

    <?php // echo $form->field($model, 'roomOtherVVLY') ?>

    <?php // echo $form->field($model, 'roomAvailableVVLY') ?>

    <?php // echo $form->field($model, 'roomSoldVVLY') ?>

    <?php // echo $form->field($model, 'occupancyVVLY') ?>

    <?php // echo $form->field($model, 'adrVVLY') ?>

    <?php // echo $form->field($model, 'roomRevParVVLY') ?>

    <?php // echo $form->field($model, 'monthYear_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
