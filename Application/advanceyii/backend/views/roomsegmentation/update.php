<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */

$this->title = 'Update Roomsegmentation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roomsegmentations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomsegmentation-update">

	<section class="content-header">
	<ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="http://localhost:8080/index.php?r=roomsegmentation%2Findex&roomsegmentationSearch%5Bid%5D=&roomsegmentationSearch%5BroomType%5D=rack&roomsegmentationSearch%5BactualRNS%5D=&roomsegmentationSearch%5BbudgetRNS%5D=&roomsegmentationSearch%5BlastYearRNS%5D="><i class="roomsegmentation-index"></i> Table</a></li>
		<li class="active">Update</li>
      </ol>
    </section>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
