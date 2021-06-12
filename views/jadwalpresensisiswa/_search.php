<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalpresensisiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jadwalpresensisiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jadwalpresensisiswa_id')->textInput(['maxlength' => true, 'placeholder' => 'Jadwalpresensisiswa']) ?>

    <?= $form->field($model, 'jadwal_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jadwal_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Pulang',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_akhir_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?php /* echo $form->field($model, 'batas_awal_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Pulang',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'batas_akhir_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Pulang',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'isaktif')->textInput(['placeholder' => 'Isaktif']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
