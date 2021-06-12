<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asalsekolah */

$this->title = 'Update Asalsekolah: ' . ' ' . $model->asalsekolah_id;
$this->params['breadcrumbs'][] = ['label' => 'Asalsekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->asalsekolah_id, 'url' => ['view', 'id' => $model->asalsekolah_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asalsekolah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
