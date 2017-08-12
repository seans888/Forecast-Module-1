<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Averageroomrate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="averageroomrate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'growthRateARR')->textInput() ?>

    <?= $form->field($model, 'actualARR')->textInput() ?>

    <?= $form->field($model, 'budgetARR')->textInput() ?>

    <?= $form->field($model, 'lastYearARR')->textInput() ?>

    <?= $form->field($model, 'room_has_monthYear_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
