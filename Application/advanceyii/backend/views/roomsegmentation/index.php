<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\roomsegmentationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomsegmentation Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
     
<div class="roomsegmentation-index">

	<section class="content-header">
    <h1><?= Html::encode($this->title) ?></h1>
   
	<ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Table</li>
      </ol>
    </section>



        <div class="row" style="padding: 15px">
            <div class="col-md-4">
                <div class="row">
                <div class="col-md-12">
                    
                    <div class="well"> 
                        <div class="row">
                            <div class="col-md-6"><?= Html::a('Create Roomsegmentation', ['create'], ['class' => 'btn btn-success']) ?></div>
                             <div class="col-md-6"><?= Html::a('Import Roomsegmentation', ['import'], ['class' => 'btn btn-success']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well"><?php  echo $this->render('_search', ['model' => $searchModel]); ?></div>
            </div>
        </div>
            </div>

            <div class="col-md-8">
                <div class="well">
                        <?= GridView::widget(['dataProvider' => $dataProvider,'filterModel' => $searchModel,'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    'roomType',
                    'actualRNS',
                    'budgetRNS',
                    'lastYearRNS',
                    'actualARR',
                    'budgetARR',
                    // 'lastYearARR',
                    // 'growthRateRNS',
                    // 'growthRateARR',
                    // 'actualR',
                    // 'budgetR',
                    // 'lastYearR',
                    // 'growthRateR',
                    // 'monthYear_id',

                    ['class' => 'yii\grid\ActionColumn'],],]); ?>
                </div>
            </div>
        </div>

</div>
