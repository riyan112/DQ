<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detailbeasiswa */

$this->title = 'Update Detailbeasiswa: ' . ' ' . $model->detailbeasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Detailbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detailbeasiswa_id, 'url' => ['view', 'id' => $model->detailbeasiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailbeasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
