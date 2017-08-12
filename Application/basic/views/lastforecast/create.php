<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lastforecast */

$this->title = 'Create Lastforecast';
$this->params['breadcrumbs'][] = ['label' => 'Lastforecasts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lastforecast-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
