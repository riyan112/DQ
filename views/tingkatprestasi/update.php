<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tingkatprestasi */

$this->title = 'Update Tingkatprestasi: ' . ' ' . $model->tingkatprestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Tingkatprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tingkatprestasi_id, 'url' => ['view', 'id' => $model->tingkatprestasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tingkatprestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
