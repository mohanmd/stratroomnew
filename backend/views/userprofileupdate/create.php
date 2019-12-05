<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserProfileupdate */

$this->title = 'Create User Profileupdate';
$this->params['breadcrumbs'][] = ['label' => 'User Profileupdates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profileupdate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
