<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = 'Create Roomflash';
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomflash-create">

	<section class="content-header">
    <h1><?= Html::encode($this->title) ?></h1>
	<ol class="breadcrumb">
       <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="http://localhost:8080/index.php?r=roomflash"><i class="roomflash-index"></i> Table</a></li>
		<li class="active">Create</li>
      </ol>
	  </section>
	  
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
