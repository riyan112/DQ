<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peringkat */

$this->title = 'Update Peringkat: ' . ' ' . $model->peringkat_id;
$this->params['breadcrumbs'][] = ['label' => 'Peringkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->peringkat_id, 'url' => ['view', 'id' => $model->peringkat_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peringkat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
