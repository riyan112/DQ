<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Statussiswa */

$this->title = 'Create Statussiswa';
$this->params['breadcrumbs'][] = ['label' => 'Statussiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="statussiswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
