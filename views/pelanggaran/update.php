<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pelanggaran */

$this->title = 'Update Pelanggaran: ' . ' ' . $model->pelanggaran_id;
$this->params['breadcrumbs'][] = ['label' => 'Pelanggaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pelanggaran_id, 'url' => ['view', 'id' => $model->pelanggaran_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pelanggaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
