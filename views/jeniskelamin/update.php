<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\jeniskelamin */

$this->title = 'Update Jeniskelamin: ' . ' ' . $model->jeniskelamin_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jeniskelamin_id, 'url' => ['view', 'id' => $model->jeniskelamin_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jeniskelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
