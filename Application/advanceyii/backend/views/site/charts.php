<?php

/* @var $this yii\web\View */

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use miloschuman\highcharts\Highcharts;

DashboardAsset::register($this);
$this->title = 'My Yii Application';
?>

<section class="content-header">
      <h1>
      Charts
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Chart</li>
      </ol>
    </section>
	
<?php	
	echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Individual'],
      'xAxis' => ['categories' => $months],
      'yAxis' => [
         'title' => ['text' => 'Monthly Records']
      ],
      'series' => [
		  $rns,
		  $arr,
		  $roomRevenue,
		  $rnsLY,
		  $arrLY,
		  $roomRevenueLY
	  ]
   ]
]);
?>
<?php	
	echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Group'],
      'xAxis' => ['categories' => $months],
      'yAxis' => [
         'title' => ['text' => 'Monthly Records']
      ],
      'series' => [
         $rns,
		  $arr,
		  $roomRevenue,
		  $rnsLY,
		  $arrLY,
		  $roomRevenueLY
	  ]
   ]
]);
?>

<?php	
	echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Key Performance Indicator'],
      'chart' => ['type' => 'column'],
	  'xAxis' => ['categories' => $months],
      'yAxis' => [
         'title' => ['text' => 'Monthly Records']
      ],
      'series' => [
         $Occupancy,
		 $adr,
		 $roomRevPar,
		 $OccupancyLY,
		 $adrLY,
		 $roomRevParLY
	  ]
   ]
]);
?>
