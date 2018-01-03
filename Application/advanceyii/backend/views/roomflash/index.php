<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\roomflashSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomflash Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
	
<div class="roomflash-index">

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
                        <div class ="col-md-1"></div>
                        <div class="col-md-5"><?= Html::a('Create Roomflash', ['create'], ['class' => 'btn btn-success']) ?></div>
                         <div class="col-md-5"><?= Html::a('Import Roomflash', ['import'], ['class' => 'btn btn-success']) ?></div>
                         <div class ="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="well"><?php echo $this->render('_search', ['model' => $searchModel]); ?></div>
            </div>
        </div>
            </div>

            <div class="col-md-8">
                <div class="well">
                        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'roomOtherActual',
            'roomAvailableActual',
            'roomIndividualLF',
            'roomGroupLF',
             'roomOtherLF',
             'roomAvailableLF',
            // 'roomSoldLF',
            // 'roomIndividualBudget',
            // 'roomGroupBudget',
            // 'roomOtherBudget',
            // 'roomAvailableBudget',
            // 'roomSoldBudget',
            // 'roomIndividualLY',
            // 'roomGroupLY',
            // 'roomOtherLY',
            // 'roomAvailableLY',
            // 'roomSoldLY',
            // 'roomRevenueActual',
            // 'roomIndividualActual',
            // 'roomGroupActual',
            // 'roomSoldActual',
            // 'occupancyActual',
            // 'adrActual',
            // 'roomRevParActual',
            // 'roomRevenueLF',
            // 'occupancyLF',
            // 'adrLF',
            // 'roomRevParLF',
            // 'roomRevenueBudget',
            // 'occupancyBudget',
            // 'adrBudget',
            // 'roomRevParBudget',
            // 'roomRevenueLY',
            // 'occupancyLY',
            // 'adrLY',
            // 'roomRevParLY',
            // 'roomRevenueVVB',
            // 'roomIndividualVVB',
            // 'roomGroupVVB',
            // 'roomOtherVVB',
            // 'roomAvailableVVB',
            // 'roomSoldVVB',
            // 'occupancyVVB',
            // 'adrVVB',
            // 'roomRevParVVB',
            // 'roomRevenueVVLY',
            // 'roomIndividualVVLY',
            // 'roomGroupVVLY',
            // 'roomOtherVVLY',
            // 'roomAvailableVVLY',
            // 'roomSoldVVLY',
            // 'occupancyVVLY',
            // 'adrVVLY',
            // 'roomRevParVVLY',
            // 'monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
            </div>
        </div>
    </div>
</div>
