<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presensiekskul */

$this->title = 'Update Presensiekskul: ' . ' ' . $model->presensiekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Presensiekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->presensiekskul_id, 'url' => ['view', 'id' => $model->presensiekskul_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="presensiekskul-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
