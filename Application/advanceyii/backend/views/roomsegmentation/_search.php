<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomsegmentation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'roomType') ?>

    <?= $form->field($model, 'actualRNS') ?>

    <?= $form->field($model, 'budgetRNS') ?>

    <?= $form->field($model, 'lastYearRNS') ?>

    <?php // echo $form->field($model, 'actualARR') ?>

    <?php // echo $form->field($model, 'budgetARR') ?>

    <?php // echo $form->field($model, 'lastYearARR') ?>

    <?php // echo $form->field($model, 'growthRateRNS') ?>

    <?php // echo $form->field($model, 'growthRateARR') ?>

    <?php // echo $form->field($model, 'actualR') ?>

    <?php // echo $form->field($model, 'budgetR') ?>

    <?php // echo $form->field($model, 'lastYearR') ?>

    <?php // echo $form->field($model, 'growthRateR') ?>

    <?php // echo $form->field($model, 'monthYear_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
