<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sumberbeasiswa */

$this->title = 'Update Sumberbeasiswa: ' . ' ' . $model->sumberbeasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Sumberbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sumberbeasiswa_id, 'url' => ['view', 'id' => $model->sumberbeasiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sumberbeasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
