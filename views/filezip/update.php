<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Filezip */

$this->title = 'Update Filezip: ' . ' ' . $model->filezip_id;
$this->params['breadcrumbs'][] = ['label' => 'Filezip', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filezip_id, 'url' => ['view', 'id' => $model->filezip_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="filezip-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
