<?php

use backend\assets\DashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\file\FileInput;
use yii\helpers\Url;

DashboardAsset::register($this);
$this->title = 'My Yii Application';



?>


 <section class="content-header">
      <h1>
      Reports
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/advanceyii/backend/web/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Export Reports</li>
      </ol>
    </section>
   

    <div class="jumbotron">

        <br>



        <h1>Export</h1>
        <p class="lead">Records has been found on the database</p>
      
        <p><a class="btn btn-lg btn-success" href="index.php?r=roomsegmentation/import-excel">Get Room Segmentation Report</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-lg btn-success" href="index.php?r=roomflash/import-excel1">Get Flash Report</a>
        </p>    

    
</div>
</div>


