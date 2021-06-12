<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendidikan */

$this->title = 'Update Pendidikan: ' . ' ' . $model->pendidikan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pendidikan_id, 'url' => ['view', 'id' => $model->pendidikan_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
