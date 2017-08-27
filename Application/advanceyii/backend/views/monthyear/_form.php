<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\monthyear */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="monthyear-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'month')->dropDownList(['January'=>'January', 'February'=>'February', 'March'=>'March', 'April'=>'April', 'May'=>'May', 'June'=>'June',
	 'July'=>'July', 'August'=>'August', 'September'=>'September', 'October'=>'October', 'November'=>'November' ,'December'=>'December'], ['prompt' => 'Select month']) 
	?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
