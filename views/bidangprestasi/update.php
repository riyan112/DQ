<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bidangprestasi */

$this->title = 'Update Bidangprestasi: ' . ' ' . $model->bidangprestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Bidangprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bidangprestasi_id, 'url' => ['view', 'id' => $model->bidangprestasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bidangprestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
