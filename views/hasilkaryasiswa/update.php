<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hasilkaryasiswa */

$this->title = 'Update Hasilkaryasiswa: ' . ' ' . $model->hasilkaryasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Hasilkaryasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hasilkaryasiswa_id, 'url' => ['view', 'id' => $model->hasilkaryasiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasilkaryasiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
