<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenistracer */

$this->title = 'Update Jenistracer: ' . ' ' . $model->jenistracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenistracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenistracer_id, 'url' => ['view', 'id' => $model->jenistracer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenistracer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
