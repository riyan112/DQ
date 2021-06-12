<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Izinsiswa */

$this->title = 'Create Izinsiswa';
$this->params['breadcrumbs'][] = ['label' => 'Izinsiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinsiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
