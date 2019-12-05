<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductUpdates */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Product Updates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-updates-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary cust-upt']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger cust-delete',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product_id',
            'variety',
            'description:ntext',
            'specification:ntext',
            'volume',
            'harvesting_period',
            'region_grown',
            'processing',
            'texture',
            'flavour',
            'delievary_time',
            'user_id',
            'requested_at',
            'approved_at',
            'approved_ by',
            'status',
        ],
    ]) ?>

</div>
