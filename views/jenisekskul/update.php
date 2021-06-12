<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisekskul */

$this->title = 'Update Jenisekskul: ' . ' ' . $model->jenisekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisekskul_id, 'url' => ['view', 'id' => $model->jenisekskul_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisekskul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
