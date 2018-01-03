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
   
    <div class="jumbotron">

        <br>



        <h1>Forecast</h1>
        <p class="lead">Excel Files has been found on the server</p>
      
        <p><a class="btn btn-lg btn-success" href="index.php?r=roomsegmentation/import">Generate Room Segmentation</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-lg btn-success" href="index.php?r=roomflash/import">Generate Flash Report</a>
        </p>    

    
</div>
</div>


