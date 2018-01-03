<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = $model->monthYear_id;
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomflash-view">

	<section class="content-header">
	<ol class="breadcrumb">
        <li><a href="http://localhost:8080/index.php"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="http://localhost:8080/index.php?r=roomflash"><i class="roomflash-index"></i> Table</a></li>
		<li class="active">View</li>
      </ol>
    </section>

    <h1>Month <?= Html::encode($this->title) ?></h1>

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
