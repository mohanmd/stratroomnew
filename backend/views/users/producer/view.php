<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\components\Convert;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->firstname." ".$model->lastname;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['updateproducer', 'id' => $model->id], ['class' => 'btn btn-primary cust-upt']) ?>
        <?= Html::a('Delete', ['deleteproducer', 'id' => $model->id], [
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
          //  'id',
            'firstname',
            'lastname',
            'username',
            'designation',
            'country.country_name',
            'email:email',
            'mobile',
            'flocertid',
           // 'password',
         //   'roleid',
        //    'typeid',
            [
            'label'=>'created_at',
            'value'=>Convert::unixtohumandatetime($model->created_at),
            ],
            [
                'label'=>'updated_at',
                'value'=>Convert::unixtohumandatetime($model->created_at),
                ],
         //   'created_by',
           // 'delete_status',
        //    'status',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'verification_token',
        ],
    ]) ?>
  <?= DetailView::widget([
        'model' => $model2,
        'attributes' => [
          //  'id',
      //      'producer_id',
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
