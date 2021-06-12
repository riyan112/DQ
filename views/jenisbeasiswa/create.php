<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenisbeasiswa */

$this->title = 'Create Jenisbeasiswa';
$this->params['breadcrumbs'][] = ['label' => 'Jenisbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisbeasiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
