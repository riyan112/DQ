<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Periodetracer */

$this->title = 'Create Periodetracer';
$this->params['breadcrumbs'][] = ['label' => 'Periodetracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodetracer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
