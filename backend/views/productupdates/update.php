<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductUpdates */

$this->title = 'Update Product Updates: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Updates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-updates-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
