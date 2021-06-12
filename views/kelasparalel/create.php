<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kelasparalel */

$this->title = 'Create Kelasparalel';
$this->params['breadcrumbs'][] = ['label' => 'Kelasparalel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelasparalel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
