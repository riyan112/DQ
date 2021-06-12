<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengisiantracer */

$this->title = 'Update Pengisiantracer: ' . ' ' . $model->pengisiantracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengisiantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pengisiantracer_id, 'url' => ['view', 'id' => $model->pengisiantracer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengisiantracer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
