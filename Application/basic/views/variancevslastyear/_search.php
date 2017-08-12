<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VariancevslastyearSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="variancevslastyear-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'roomsRevenue') ?>

    <?= $form->field($model, 'roomsIndividual') ?>

    <?= $form->field($model, 'roomsGroup') ?>

    <?= $form->field($model, 'roomsOthers') ?>

    <?php // echo $form->field($model, 'roomsAvailable') ?>

    <?php // echo $form->field($model, 'roomsSold') ?>

    <?php // echo $form->field($model, 'occupancy') ?>

    <?php // echo $form->field($model, 'adr') ?>

    <?php // echo $form->field($model, 'roomsRevPar') ?>

    <?php // echo $form->field($model, 'monthYear_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
