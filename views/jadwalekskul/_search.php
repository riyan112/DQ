<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalekskulSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jadwalekskul-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jadwalekskul_id')->textInput(['maxlength' => true, 'placeholder' => 'Jadwalekskul']) ?>

    <?= $form->field($model, 'ekskul_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Ekskul::find()->orderBy('ekskul_id')->asArray()->all(), 'ekskul_id', 'ekskul_id'),
        'options' => ['placeholder' => 'Choose Ekskul'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jadwal_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jadwal_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?php /* echo $form->field($model, 'batas_akhir_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'batas_awal_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); */ ?>

    <?php /* echo $form->field($model, 'batas_akhir_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Pulangekskul',
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
