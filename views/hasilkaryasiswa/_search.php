<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HasilkaryasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-hasilkaryasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hasilkaryasiswa_id')->textInput(['placeholder' => 'Hasilkaryasiswa']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jeniskaryasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskaryasiswa::find()->orderBy('jeniskaryasiswa_id')->asArray()->all(), 'jeniskaryasiswa_id', 'jeniskaryasiswa_id'),
        'options' => ['placeholder' => 'Choose Jeniskaryasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'judulkaryasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Judulkaryasiswa']) ?>

    <?= $form->field($model, 'keterangankaryasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Keterangankaryasiswa']) ?>

    <?php /* echo $form->field($model, 'tgluploadkaryasiswa')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgluploadkaryasiswa',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'portofolio')->textInput(['maxlength' => true, 'placeholder' => 'Portofolio']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
