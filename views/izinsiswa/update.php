<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Izinsiswa */

$this->title = 'Update Izinsiswa: ' . ' ' . $model->izinsiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Izinsiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->izinsiswa_id, 'url' => ['view', 'id' => $model->izinsiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="izinsiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
