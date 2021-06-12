<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IzinekskulSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-izinekskul-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'izinekskul_id')->textInput(['placeholder' => 'Izinekskul']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keteranganizinekskul')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganizinekskul']) ?>

    <?= $form->field($model, 'tgl_izinekskul')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Izinekskul',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'buktiizinekskul')->textInput(['maxlength' => true, 'placeholder' => 'Buktiizinekskul']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
