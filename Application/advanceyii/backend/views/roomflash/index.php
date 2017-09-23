<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\roomflashSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roomflashes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomflash-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Roomflash', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'roomOtherActual',
            'roomAvailableActual',
            'roomIndividualLF',
            'roomGroupLF',
            // 'roomOtherLF',
            // 'roomAvailableLF',
            // 'roomSoldLF',
            // 'roomIndividualBudget',
            // 'roomGroupBudget',
            // 'roomOtherBudget',
            // 'roomAvailableBudget',
            // 'roomSoldBudget',
            // 'roomIndividualLY',
            // 'roomGroupLY',
            // 'roomOtherLY',
            // 'roomAvailableLY',
            // 'roomSoldLY',
            // 'roomRevenueActual',
            // 'roomIndividualActual',
            // 'roomGroupActual',
            // 'roomSoldActual',
            // 'occupancyActual',
            // 'adrActual',
            // 'roomRevParActual',
            // 'roomRevenueLF',
            // 'occupancyLF',
            // 'adrLF',
            // 'roomRevParLF',
            // 'roomRevenueBudget',
            // 'occupancyBudget',
            // 'adrBudget',
            // 'roomRevParBudget',
            // 'roomRevenueLY',
            // 'occupancyLY',
            // 'adrLY',
            // 'roomRevParLY',
            // 'roomRevenueVVB',
            // 'roomIndividualVVB',
            // 'roomGroupVVB',
            // 'roomOtherVVB',
            // 'roomAvailableVVB',
            // 'roomSoldVVB',
            // 'occupancyVVB',
            // 'adrVVB',
            // 'roomRevParVVB',
            // 'roomRevenueVVLY',
            // 'roomIndividualVVLY',
            // 'roomGroupVVLY',
            // 'roomOtherVVLY',
            // 'roomAvailableVVLY',
            // 'roomSoldVVLY',
            // 'occupancyVVLY',
            // 'adrVVLY',
            // 'roomRevParVVLY',
            // 'monthYear_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
