<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detailprestasi */

$this->title = 'Create Detailprestasi';
$this->params['breadcrumbs'][] = ['label' => 'Detailprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailprestasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
