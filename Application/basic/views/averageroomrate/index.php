<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AverageroomrateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Averageroomrates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="averageroomrate-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Averageroomrate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'growthRateARR',
            'actualARR',
            'budgetARR',
            'lastYearARR',
            // 'room_has_monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
