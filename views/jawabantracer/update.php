<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jawabantracer */

$this->title = 'Update Jawabantracer: ' . ' ' . $model->jawaban_id;
$this->params['breadcrumbs'][] = ['label' => 'Jawabantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jawaban_id, 'url' => ['view', 'id' => $model->jawaban_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jawabantracer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
