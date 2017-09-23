<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\roomsegmentation */

$this->title = 'Create Roomsegmentation';
$this->params['breadcrumbs'][] = ['label' => 'Roomsegmentations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomsegmentation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
