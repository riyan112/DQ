<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispertanyaan */

$this->title = 'Update Jenispertanyaan: ' . ' ' . $model->jenispertanyaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispertanyaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenispertanyaan_id, 'url' => ['view', 'id' => $model->jenispertanyaan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenispertanyaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
