<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LastforecastSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lastforecasts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lastforecast-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lastforecast', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'roomsRevenue',
            'roomsIndividual',
            'roomsGroup',
            'roomsOthers',
            // 'roomsAvailable',
            // 'roomsSold',
            // 'occupancy',
            // 'adr',
            // 'roomsRevPar',
            // 'monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
