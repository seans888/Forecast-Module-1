<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Variancevslastyear */

$this->title = 'Update Variancevslastyear: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Variancevslastyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="variancevslastyear-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
