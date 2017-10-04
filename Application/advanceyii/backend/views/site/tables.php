<?php

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
      Begin Forecast
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/advanceyii/backend/web/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Begin Forecast</li>
      </ol>
    </section>
   

    <div class="jumbotron">


       <form align = "center" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileName"><br><br>
            <input type="submit" name="moveFile" value="Upload">
        </form>
        <br><br>

        <form action="/action_page.php" >
          <select name="month">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>
            <select name="year">
            <option value="January">2014</option>
            <option value="February">2015</option>
            <option value="March">2016</option>
            <option value="April">2017</option>
          </select>

          <br><br>
          <input type="submit" >
        </form>


        <h1>Forecast</h1>
        <p class="lead">Excel Files has been found on the server</p>
      
        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Generate Room Segmentation</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Generate Flash Report</a>
        </p>    

    
</div>
</div>


