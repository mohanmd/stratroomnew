<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Producervideo */

$this->title = 'Create Producervideo';
$this->params['breadcrumbs'][] = ['label' => 'Producervideos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producervideo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
