<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensisiswa */

$this->title = 'Create Jadwalpresensisiswa';
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensisiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
