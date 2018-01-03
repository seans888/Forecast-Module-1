<?php
/* @var $this yii\web\View */
use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
DashboardAsset::register($this);
$this->title = 'My Yii Application';
?>
 <section class="content-header">
      <h1>
        Dashboard
        <small><?php
         echo (date('F Y'));?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/advanceyii/backend/web/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<p>

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
	use miloschuman\highcharts\Highcharts;
	
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