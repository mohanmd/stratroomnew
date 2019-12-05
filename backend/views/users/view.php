<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

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
           // 'id',
            'firstname',
            'lastname',
            'username',
            'designation',
            'country.country_name',
            'email:email',
            'mobile',
            'flocertid',
         //   'password',
          //  'roleid',
            'type.type_name',
            'created_at',
            'updated_at',
          //  'delete_status',
           // 'status',
          //  'auth_key',
          //  'password_hash',
          //  'password_reset_token',
          //  'verification_token',
        ],
    ]) ?>

</div>
