<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = 'Update Roomflash: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="roomflash-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
