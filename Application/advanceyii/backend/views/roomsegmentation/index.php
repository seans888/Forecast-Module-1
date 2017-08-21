<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\roomsegmentationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomsegmentations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomsegmentation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Roomsegmentation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'roomType',
            'actualRNS',
            'budgetRNS',
            'lastYearRNS',
            // 'actualARR',
            // 'budgetARR',
            // 'lastYearARR',
            // 'growthRateRNS',
            // 'growthRateARR',
            // 'actualR',
            // 'budgetR',
            // 'lastYearR',
            // 'growthRateR',
            // 'monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
