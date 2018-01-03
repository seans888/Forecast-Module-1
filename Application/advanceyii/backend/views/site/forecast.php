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
      Forecast
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/advanceyii/backend/web/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Forecast</li>
      </ol>
    </section>
   

    <div class="jumbotron">

   
    <div class="jumbotron">



        <!--<h1>Forecast</h1>-->
        <!--<p class="lead">Forecast for the next month is</p>-->
      	<!--<h3><?php $read = exec("python svr.py"); echo $read; ?></h3>-->
        <!--<p><a class="btn btn-lg btn-success" href="index.php?r=roomsegmentation/import" >Save this Forecast</a> <p><p>-->
        <!--       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->



               <div class="container">
				  <div class="row">

				    <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="info-box">

            <div class="info-box-content"><h2>Room Revenue forecast next month </h2>
      	<h1>₱ <?php $read = exec("python svr.py"); echo  $read; ?></h1>
        <!--<p><a class="btn btn-lg btn-success" href="index.php?r=roomsegmentation/import" style="padding: 10px" >Save this Forecast</a> <p><p>-->
        	<h3><?php
					$currentMonth = date('F');
					$nextMonth = Date('F', strtotime($currentMonth . " next month")); 
					echo ($nextMonth . " " . date("Y") . " forecast")	?></h3>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
				   
				  </div>
				</div>




<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Individual Rooms Revenue</span>
              <span class="info-box-number"><?php print_r($individual); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Group Rooms Revenue</span>
              <span class="info-box-number"><?php print_r($group); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Last Year Room Nights Sold</span>
              <span class="info-box-number"><?php print_r($roomsoldls); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Available Rooms</span>
              <span class="info-box-number"><?php print_r($roomavailable); ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       </div>
       
<?php	
	echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Room Revenue'],
      'xAxis' => ['categories' => $months],
      'yAxis' => [
         'title' => ['text' => 'Monthly Records']
      ],
      'series' => [
		  $rns,
	  ]
   ]
]);
?>

    
</div>
</div>


