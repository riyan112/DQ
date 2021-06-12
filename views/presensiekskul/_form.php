<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Presensiekskul */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="presensiekskul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'presensiekskul_id')->textInput(['maxlength' => true, 'placeholder' => 'Presensiekskul']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jadwalekskul_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalekskul::find()->orderBy('jadwalekskul_id')->asArray()->all(), 'jadwalekskul_id', 'jadwalekskul_id'),
        'options' => ['placeholder' => 'Choose Jadwalekskul'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tgl_presensiekskkul')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Presensiekskkul',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'statuskehadiranekskul')->dropDownList([ 'HADIR' => 'HADIR', 'IZIN' => 'IZIN', 'SAKIT' => 'SAKIT', 'TANPA KETERANGAN' => 'TANPA KETERANGAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'izinekskul_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Izinekskul::find()->orderBy('izinekskul_id')->asArray()->all(), 'izinekskul_id', 'izinekskul_id'),
        'options' => ['placeholder' => 'Choose Izinekskul'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jam_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jam_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true, 'placeholder' => 'Lokasi']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
