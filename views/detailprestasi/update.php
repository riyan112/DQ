<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detailprestasi */

$this->title = 'Update Detailprestasi: ' . ' ' . $model->detailprestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Detailprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detailprestasi_id, 'url' => ['view', 'id' => $model->detailprestasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailprestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
