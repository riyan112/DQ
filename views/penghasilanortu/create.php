<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penghasilanortu */

$this->title = 'Create Penghasilanortu';
$this->params['breadcrumbs'][] = ['label' => 'Penghasilanortu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penghasilanortu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
