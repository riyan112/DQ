<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sumberbeasiswa */

$this->title = 'Create Sumberbeasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Sumberbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumberbeasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
