<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelanggaran */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="pelanggaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pelanggaran_id')->textInput(['placeholder' => 'Pelanggaran']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'pegawai_id')->textInput(['maxlength' => true, 'placeholder' => 'Pegawai']) ?>

    <?= $form->field($model, 'jenispelanggaran_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispelanggaran::find()->orderBy('jenispelanggaran_id')->asArray()->all(), 'jenispelanggaran_id', 'jenispelanggaran_id'),
        'options' => ['placeholder' => 'Choose Jenispelanggaran'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jeniskonseling_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskonseling::find()->orderBy('jeniskonseling_id')->asArray()->all(), 'jeniskonseling_id', 'jeniskonseling_id'),
        'options' => ['placeholder' => 'Choose Jeniskonseling'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keteranganpelanggaran')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganpelanggaran']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
