<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilesiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-filesiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'filesiswa_id')->textInput(['placeholder' => 'Filesiswa']) ?>

    <?= $form->field($model, 'namafilesiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namafilesiswa']) ?>

    <?= $form->field($model, 'ukuran')->textInput(['placeholder' => 'Ukuran']) ?>

    <?= $form->field($model, 'tgl_upload')->textInput(['placeholder' => 'Tgl Upload']) ?>

    <?= $form->field($model, 'tgl_proses')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Proses',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
