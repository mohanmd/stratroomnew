<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerimageTypes */

$this->title = 'Create Producerimage Types';
$this->params['breadcrumbs'][] = ['label' => 'Producerimage Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producerimage-types-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
