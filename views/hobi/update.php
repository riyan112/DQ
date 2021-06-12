<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hobi */

$this->title = 'Update Hobi: ' . ' ' . $model->hobi_id;
$this->params['breadcrumbs'][] = ['label' => 'Hobi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hobi_id, 'url' => ['view', 'id' => $model->hobi_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hobi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
