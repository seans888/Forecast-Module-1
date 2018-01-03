<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = 'Update Roomflash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomflash-update">

	<section class="content-header">
	<ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="http://localhost:8080/index.php?r=roomflash"><i class="roomflash-index"></i> Table</a></li>
		<li class="active">Update</li>
      </ol>
    </section>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
