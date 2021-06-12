<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinekskul */

$this->title = 'Create Izinekskul';
$this->params['breadcrumbs'][] = ['label' => 'Izinekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinekskul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
