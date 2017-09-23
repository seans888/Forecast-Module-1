<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */

$this->title = 'Update Roomsegmentation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roomsegmentations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomsegmentation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
