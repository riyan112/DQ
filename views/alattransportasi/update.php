<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alattransportasi */

$this->title = 'Update Alattransportasi: ' . ' ' . $model->alattransportasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Alattransportasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alattransportasi_id, 'url' => ['view', 'id' => $model->alattransportasi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alattransportasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
