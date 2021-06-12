<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Periodetracer */

$this->title = 'Update Periodetracer: ' . ' ' . $model->periodetracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Periodetracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->periodetracer_id, 'url' => ['view', 'id' => $model->periodetracer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periodetracer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
