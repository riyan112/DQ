<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alattransportasi */

$this->title = 'Create Alattransportasi';
$this->params['breadcrumbs'][] = ['label' => 'Alattransportasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alattransportasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
