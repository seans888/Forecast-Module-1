<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\monthyear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monthyear-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($upload, 'month')->fileInput() ?>
	
	 <?= $form->field($upload, 'year')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($upload->isNewRecord ? 'Create' : 'Update', ['class' => $upload->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
