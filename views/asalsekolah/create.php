<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asalsekolah */

$this->title = 'Create Asalsekolah';
$this->params['breadcrumbs'][] = ['label' => 'Asalsekolah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asalsekolah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
