<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfileupdate */

$this->title = 'Update User Profileupdate: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Profileupdates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-profileupdate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
