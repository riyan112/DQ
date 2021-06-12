<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Presensisiswa */

$this->title = 'Update Presensisiswa: ' . ' ' . $model->presensisiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Presensisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->presensisiswa_id, 'url' => ['view', 'id' => $model->presensisiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="presensisiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
