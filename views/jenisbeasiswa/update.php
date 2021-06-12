<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisbeasiswa */

$this->title = 'Update Jenisbeasiswa: ' . ' ' . $model->jenisbeasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisbeasiswa_id, 'url' => ['view', 'id' => $model->jenisbeasiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisbeasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
