<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jawabantracer */

$this->title = 'Create Jawabantracer';
$this->params['breadcrumbs'][] = ['label' => 'Jawabantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawabantracer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
