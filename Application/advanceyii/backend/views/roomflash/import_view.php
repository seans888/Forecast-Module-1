<?php
use yii\widgets\ActiveForm;
?>
	<section class="content-header">
		<h1>Generate Flash Report</h1>
		<small></small>
			<ol class="breadcrumb">
				<li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Import File</li>
			</ol>
	  </section>
	  
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

	<?= $form->field($model, 'monthYear_id')->dropDownList($listData,['prompt'=>'Select...']) ?>
  
	<?= $form->field($model, 'fileUpload')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>