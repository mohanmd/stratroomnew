<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoleType */

$this->title = 'Create Role Type';
$this->params['breadcrumbs'][] = ['label' => 'Role Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
