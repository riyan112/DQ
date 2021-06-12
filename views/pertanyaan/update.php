<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */

$this->title = 'Update Pertanyaan: ' . ' ' . $model->pertanyaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pertanyaan_id, 'url' => ['view', 'id' => $model->pertanyaan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertanyaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
