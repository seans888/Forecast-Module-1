<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomflash-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'roomOtherActual',
            'roomAvailableActual',
            'roomIndividualLF',
            'roomGroupLF',
            'roomOtherLF',
            'roomAvailableLF',
            'roomSoldLF',
            'roomIndividualBudget',
            'roomGroupBudget',
            'roomOtherBudget',
            'roomAvailableBudget',
            'roomSoldBudget',
            'roomIndividualLY',
            'roomGroupLY',
            'roomOtherLY',
            'roomAvailableLY',
            'roomSoldLY',
            'roomRevenueActual',
            'roomIndividualActual',
            'roomGroupActual',
            'roomSoldActual',
            'occupancyActual',
            'adrActual',
            'roomRevParActual',
            'roomRevenueLF',
            'occupancyLF',
            'adrLF',
            'roomRevParLF',
            'roomRevenueBudget',
            'occupancyBudget',
            'adrBudget',
            'roomRevParBudget',
            'roomRevenueLY',
            'occupancyLY',
            'adrLY',
            'roomRevParLY',
            'roomRevenueVVB',
            'roomIndividualVVB',
            'roomGroupVVB',
            'roomOtherVVB',
            'roomAvailableVVB',
            'roomSoldVVB',
            'occupancyVVB',
            'adrVVB',
            'roomRevParVVB',
            'roomRevenueVVLY',
            'roomIndividualVVLY',
            'roomGroupVVLY',
            'roomOtherVVLY',
            'roomAvailableVVLY',
            'roomSoldVVLY',
            'occupancyVVLY',
            'adrVVLY',
            'roomRevParVVLY',
            'monthYear_id',
        ],
    ]) ?>

</div>
