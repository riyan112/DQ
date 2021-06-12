<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskaryasiswa */

$this->title = 'Update Jeniskaryasiswa: ' . ' ' . $model->jeniskaryasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskaryasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jeniskaryasiswa_id, 'url' => ['view', 'id' => $model->jeniskaryasiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniskaryasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
