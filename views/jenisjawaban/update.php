<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisjawaban */

$this->title = 'Update Jenisjawaban: ' . ' ' . $model->jenisjawaban_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisjawaban', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisjawaban_id, 'url' => ['view', 'id' => $model->jenisjawaban_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisjawaban-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
