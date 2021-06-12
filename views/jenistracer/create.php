<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jenistracer */

$this->title = 'Create Jenistracer';
$this->params['breadcrumbs'][] = ['label' => 'Jenistracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenistracer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
