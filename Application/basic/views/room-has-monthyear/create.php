<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RoomHasMonthyear */

$this->title = 'Create Room Has Monthyear';
$this->params['breadcrumbs'][] = ['label' => 'Room Has Monthyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-has-monthyear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
