<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hasilkaryasiswa */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="hasilkaryasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

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

    <?= $form->field($model, 'tgluploadkaryasiswa')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgluploadkaryasiswa',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'portofolio')->textInput(['maxlength' => true, 'placeholder' => 'Portofolio']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
