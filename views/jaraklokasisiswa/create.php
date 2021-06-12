<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Jaraklokasisiswa */

$this->title = 'Create Jaraklokasisiswa';
$this->params['breadcrumbs'][] = ['label' => 'Jaraklokasisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jaraklokasisiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
