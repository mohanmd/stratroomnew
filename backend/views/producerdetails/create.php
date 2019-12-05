<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProducerDetails */

$this->title = 'Create Producer Details';
$this->params['breadcrumbs'][] = ['label' => 'Producer Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
