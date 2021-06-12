<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kelasparalel */

$this->title = 'Update Kelasparalel: ' . ' ' . $model->kelasparalel_id;
$this->params['breadcrumbs'][] = ['label' => 'Kelasparalel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kelasparalel_id, 'url' => ['view', 'id' => $model->kelasparalel_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelasparalel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
