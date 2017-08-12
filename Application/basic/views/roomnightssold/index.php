<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RoomnightssoldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomnightssolds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomnightssold-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Roomnightssold', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'gRateRNS',
            'actualRNS',
            'budgetRNS',
            'lastYearRNS',
            // 'room_has_monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
