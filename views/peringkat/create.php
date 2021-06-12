<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Peringkat */

$this->title = 'Create Peringkat';
$this->params['breadcrumbs'][] = ['label' => 'Peringkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peringkat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
