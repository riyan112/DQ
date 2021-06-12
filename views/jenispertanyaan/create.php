<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenispertanyaan */

$this->title = 'Create Jenispertanyaan';
$this->params['breadcrumbs'][] = ['label' => 'Jenispertanyaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispertanyaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
