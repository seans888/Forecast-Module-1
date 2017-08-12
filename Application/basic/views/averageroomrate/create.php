<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Averageroomrate */

$this->title = 'Create Averageroomrate';
$this->params['breadcrumbs'][] = ['label' => 'Averageroomrates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="averageroomrate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
