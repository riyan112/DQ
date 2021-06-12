<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Filesiswa */

$this->title = 'Create Filesiswa';
$this->params['breadcrumbs'][] = ['label' => 'Filesiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filesiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
