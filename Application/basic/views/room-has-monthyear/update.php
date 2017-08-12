<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomHasMonthyear */

$this->title = 'Update Room Has Monthyear: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Room Has Monthyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="room-has-monthyear-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
