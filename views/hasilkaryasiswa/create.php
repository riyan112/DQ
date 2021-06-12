<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Hasilkaryasiswa */

$this->title = 'Create Hasilkaryasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Hasilkaryasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasilkaryasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
