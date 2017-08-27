<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Monthyear;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="roomsegmentation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'roomType')->dropDownList(['Rack'=>'Rack', 'Corporate'=>'Corporate', 'Corporate others'=>'Corporate others', 'Packages/Promo'=> 'Packages/Promo',
	'Wholesale Online'=>'Wholesale Online', 'Wholesale Offline'=>'Wholesale Offline','Individual Others'=>'Individual Others', 'Corporate Meetings'=>'Convention/Association', 'Government/NGOs', 'Group Tours', 'Group Others'],
	['prompt' => 'Select room type']) ?>

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

    <?= $form->field($model, 'monthYear_id')->dropDownList(
		ArrayHelper::map(Monthyear::find()->all(), 'id', 'month', 'year'),
		['prompt'=>'Select Month Year']);
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
