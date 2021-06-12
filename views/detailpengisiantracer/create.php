<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detailpengisiantracer */

$this->title = 'Create Detailpengisiantracer';
$this->params['breadcrumbs'][] = ['label' => 'Detailpengisiantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailpengisiantracer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
