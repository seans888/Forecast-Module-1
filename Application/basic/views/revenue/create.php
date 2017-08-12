<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Revenue */

$this->title = 'Create Revenue';
$this->params['breadcrumbs'][] = ['label' => 'Revenues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revenue-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
