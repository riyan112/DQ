<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tingkatprestasi */

$this->title = 'Create Tingkatprestasi';
$this->params['breadcrumbs'][] = ['label' => 'Tingkatprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkatprestasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
