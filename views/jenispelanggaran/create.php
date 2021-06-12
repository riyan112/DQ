<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenispelanggaran */

$this->title = 'Create Jenispelanggaran';
$this->params['breadcrumbs'][] = ['label' => 'Jenispelanggaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispelanggaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
