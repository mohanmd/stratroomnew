<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Enquirymasters */

$this->title = 'Create Enquirymasters';
$this->params['breadcrumbs'][] = ['label' => 'Enquirymasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enquirymasters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
