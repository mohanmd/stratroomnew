<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerimageTypes */

$this->title = 'Update Producerimage Types: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Producerimage Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producerimage-types-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
