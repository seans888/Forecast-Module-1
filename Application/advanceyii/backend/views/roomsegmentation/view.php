<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */

$this->title = $model->monthYear_id;
$this->params['breadcrumbs'][] = ['label' => 'Roomsegmentations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomsegmentation-view">

	<section class="content-header">
	<ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="http://localhost:8080/index.php?r=roomsegmentation%2Findex&roomsegmentationSearch%5Bid%5D=&roomsegmentationSearch%5BroomType%5D=rack&roomsegmentationSearch%5BactualRNS%5D=&roomsegmentationSearch%5BbudgetRNS%5D=&roomsegmentationSearch%5BlastYearRNS%5D="><i class="roomsegmentation-index"></i> Table</a></li>
		<li class="active">View</li>
      </ol>
    </section>
	
    <h1>Month <?= Html::encode($this->title) ?></h1>
	

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'roomType',
            'actualRNS',
            'budgetRNS',
            'lastYearRNS',
            'actualARR',
            'budgetARR',
            'lastYearARR',
            'growthRateRNS',
            'growthRateARR',
            'actualR',
            'budgetR',
            'lastYearR',
            'growthRateR',
            'monthYear_id',
        ],
    ]) ?>

</div>
