<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detailpengisiantracer */

$this->title = 'Update Detailpengisiantracer: ' . ' ' . $model->detailpengisiantracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Detailpengisiantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->detailpengisiantracer_id, 'url' => ['view', 'id' => $model->detailpengisiantracer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detailpengisiantracer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
