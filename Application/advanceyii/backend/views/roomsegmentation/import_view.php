<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

	<?= $form->field($model, 'monthYear_id')->dropDownList($listData,['prompt'=>'Select...']) ?>
  
	<?= $form->field($model, 'fileUpload')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>