<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Presensisiswa */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="presensisiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'presensisiswa_id')->textInput(['maxlength' => true, 'placeholder' => 'Presensisiswa']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jadwalpresensisiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensisiswa::find()->orderBy('jadwalpresensisiswa_id')->asArray()->all(), 'jadwalpresensisiswa_id', 'jadwalpresensisiswa_id'),
        'options' => ['placeholder' => 'Choose Jadwalpresensisiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tgl_presensi')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Presensi',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'statuskehadiran')->dropDownList([ 'HADIR' => 'HADIR', 'IJIN' => 'IJIN', 'SAKIT' => 'SAKIT', 'TANPA KETERANGAN' => 'TANPA KETERANGAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'izinsiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Izinsiswa::find()->orderBy('izinsiswa_id')->asArray()->all(), 'izinsiswa_id', 'izinsiswa_id'),
        'options' => ['placeholder' => 'Choose Izinsiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jam_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jam_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jam Pulang',
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
