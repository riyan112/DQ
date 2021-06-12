<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Statussiswa */

$this->title = 'Update Statussiswa: ' . ' ' . $model->statussiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Statussiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->statussiswa_id, 'url' => ['view', 'id' => $model->statussiswa_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="statussiswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
