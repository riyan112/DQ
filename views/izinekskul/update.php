<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinekskul */

$this->title = 'Update Izinekskul: ' . ' ' . $model->izinekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Izinekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izinekskul_id, 'url' => ['view', 'id' => $model->izinekskul_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinekskul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
