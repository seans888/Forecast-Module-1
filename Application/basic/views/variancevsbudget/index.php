<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VariancevsbudgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Variancevsbudgets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="variancevsbudget-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Variancevsbudget', ['create'], ['class' => 'btn btn-success']) ?>
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
