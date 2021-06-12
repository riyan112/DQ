<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Citacita */

$this->title = 'Create Citacita';
$this->params['breadcrumbs'][] = ['label' => 'Citacita', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="citacita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
