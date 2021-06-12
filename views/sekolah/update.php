<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */

$this->title = 'Update Sekolah: ' . ' ' . $model->sekolah_id;
$this->params['breadcrumbs'][] = ['label' => 'Sekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->sekolah_id, 'url' => ['view', 'id' => $model->sekolah_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
