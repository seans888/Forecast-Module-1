<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\roomflash */

$this->title = 'Create Roomflash';
$this->params['breadcrumbs'][] = ['label' => 'Roomflashes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="roomflash-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
