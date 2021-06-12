<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Presensiekskul */

$this->title = 'Create Presensiekskul';
$this->params['breadcrumbs'][] = ['label' => 'Presensiekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensiekskul-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
