<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\monthyearSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Monthyears';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monthyear-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Monthyear', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'month',
            'year',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
