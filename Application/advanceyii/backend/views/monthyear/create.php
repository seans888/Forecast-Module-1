<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\monthyear */

$this->title = 'Create Monthyear';
$this->params['breadcrumbs'][] = ['label' => 'Monthyears', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="monthyear-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
