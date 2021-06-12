<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pekerjaan */

$this->title = 'Update Pekerjaan: ' . ' ' . $model->pekerjaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pekerjaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pekerjaan_id, 'url' => ['view', 'id' => $model->pekerjaan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pekerjaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
