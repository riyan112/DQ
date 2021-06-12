<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenisasalsekolah */

$this->title = 'Create Jenisasalsekolah';
$this->params['breadcrumbs'][] = ['label' => 'Jenisasalsekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisasalsekolah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
