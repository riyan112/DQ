<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jeniskonseling */

$this->title = 'Create Jeniskonseling';
$this->params['breadcrumbs'][] = ['label' => 'Jeniskonseling', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniskonseling-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
