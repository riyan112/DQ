<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenisekskul */

$this->title = 'Create Jenisekskul';
$this->params['breadcrumbs'][] = ['label' => 'Jenisekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisekskul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
