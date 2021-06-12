<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensisiswa */

$this->title = 'Update Jadwalpresensisiswa: ' . ' ' . $model->jadwalpresensisiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jadwalpresensisiswa_id, 'url' => ['view', 'id' => $model->jadwalpresensisiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalpresensisiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
