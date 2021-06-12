<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenispelanggaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenispelanggaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenispelanggaran_id')->textInput(['placeholder' => 'Jenispelanggaran']) ?>

    <?= $form->field($model, 'namapelanggran')->textInput(['maxlength' => true, 'placeholder' => 'Namapelanggran']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
