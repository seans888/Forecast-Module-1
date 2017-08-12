<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lastyear */

$this->title = 'Create Lastyear';
$this->params['breadcrumbs'][] = ['label' => 'Lastyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lastyear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
