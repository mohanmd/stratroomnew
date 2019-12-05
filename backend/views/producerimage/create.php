<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producerimage */

$this->title = 'Create Producerimage';
$this->params['breadcrumbs'][] = ['label' => 'Producerimages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producerimage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
