<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispelanggaran */

$this->title = 'Update Jenispelanggaran: ' . ' ' . $model->jenispelanggaran_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispelanggaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenispelanggaran_id, 'url' => ['view', 'id' => $model->jenispelanggaran_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenispelanggaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
