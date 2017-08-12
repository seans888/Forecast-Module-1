<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Roomnightssold */

$this->title = 'Create Roomnightssold';
$this->params['breadcrumbs'][] = ['label' => 'Roomnightssolds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomnightssold-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
