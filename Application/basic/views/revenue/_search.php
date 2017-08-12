<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RevenueSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="revenue-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'gRateRev') ?>

    <?= $form->field($model, 'actualRev') ?>

    <?= $form->field($model, 'budgetRev') ?>

    <?= $form->field($model, 'lastYearRev') ?>

    <?php // echo $form->field($model, 'room_has_monthYear_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
