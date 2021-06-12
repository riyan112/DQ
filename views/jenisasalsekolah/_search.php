<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisasalsekolahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenisasalsekolah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenisasalsekolah_id')->textInput(['placeholder' => 'Jenisasalsekolah']) ?>

    <?= $form->field($model, 'namaasalsekolah')->textInput(['maxlength' => true, 'placeholder' => 'Namaasalsekolah']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
