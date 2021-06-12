<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenjang */

$this->title = 'Update Jenjang: ' . ' ' . $model->jenjang_sekolah_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenjang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenjang_sekolah_id, 'url' => ['view', 'id' => $model->jenjang_sekolah_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenjang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
