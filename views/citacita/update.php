<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Citacita */

$this->title = 'Update Citacita: ' . ' ' . $model->citacita_id;
$this->params['breadcrumbs'][] = ['label' => 'Citacita', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->citacita_id, 'url' => ['view', 'id' => $model->citacita_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="citacita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
