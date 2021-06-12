<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskonseling */

$this->title = 'Update Jeniskonseling: ' . ' ' . $model->jeniskonseling_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskonseling', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jeniskonseling_id, 'url' => ['view', 'id' => $model->jeniskonseling_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniskonseling-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
