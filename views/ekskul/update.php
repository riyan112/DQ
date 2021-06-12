<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ekskul */

$this->title = 'Update Ekskul: ' . ' ' . $model->ekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Ekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ekskul_id, 'url' => ['view', 'id' => $model->ekskul_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ekskul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
