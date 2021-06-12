<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalekskul */

$this->title = 'Update Jadwalekskul: ' . ' ' . $model->jadwalekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jadwalekskul_id, 'url' => ['view', 'id' => $model->jadwalekskul_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwalekskul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
