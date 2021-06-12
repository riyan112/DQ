<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filesiswa */

$this->title = 'Update Filesiswa: ' . ' ' . $model->filesiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Filesiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filesiswa_id, 'url' => ['view', 'id' => $model->filesiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filesiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
