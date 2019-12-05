<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerDetails */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Producer Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="producer-details-view">

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
            'producer_id',
            'founded_in',
            'founded_since',
            'producer_profile',
            'fairtrade_impact:ntext',
            'organization',
            'service',
            'faircertsince',
            'no_of_farmers',
            'org_background',
        ],
    ]) ?>

</div>
