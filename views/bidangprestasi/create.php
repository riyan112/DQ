<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bidangprestasi */

$this->title = 'Create Bidangprestasi';
$this->params['breadcrumbs'][] = ['label' => 'Bidangprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidangprestasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
