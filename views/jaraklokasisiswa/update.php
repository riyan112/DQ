<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jaraklokasisiswa */

$this->title = 'Update Jaraklokasisiswa: ' . ' ' . $model->jaraklokasisiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jaraklokasisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jaraklokasisiswa_id, 'url' => ['view', 'id' => $model->jaraklokasisiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jaraklokasisiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
