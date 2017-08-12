<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Actual */

$this->title = 'Create Actual';
$this->params['breadcrumbs'][] = ['label' => 'Actuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actual-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
