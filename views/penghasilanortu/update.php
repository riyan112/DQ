<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penghasilanortu */

$this->title = 'Update Penghasilanortu: ' . ' ' . $model->penghasilanortu_id;
$this->params['breadcrumbs'][] = ['label' => 'Penghasilanortu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penghasilanortu_id, 'url' => ['view', 'id' => $model->penghasilanortu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penghasilanortu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
