<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PertanyaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pertanyaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pertanyaan_id')->textInput(['placeholder' => 'Pertanyaan']) ?>

    <?= $form->field($model, 'periodetracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Periodetracer::find()->orderBy('periodetracer_id')->asArray()->all(), 'periodetracer_id', 'periodetracer_id'),
        'options' => ['placeholder' => 'Choose Periodetracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenistracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenistracer::find()->orderBy('jenistracer_id')->asArray()->all(), 'jenistracer_id', 'jenistracer_id'),
        'options' => ['placeholder' => 'Choose Jenistracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenispertanyaan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispertanyaan::find()->orderBy('jenispertanyaan_id')->asArray()->all(), 'jenispertanyaan_id', 'jenispertanyaan_id'),
        'options' => ['placeholder' => 'Choose Jenispertanyaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'isipertanyaan')->textInput(['maxlength' => true, 'placeholder' => 'Isipertanyaan']) ?>

    <?php /* echo $form->field($model, 'nourut')->textInput(['maxlength' => true, 'placeholder' => 'Nourut']) */ ?>

    <?php /* echo $form->field($model, 'halaman')->textInput(['maxlength' => true, 'placeholder' => 'Halaman']) */ ?>

    <?php /* echo $form->field($model, 'namahalaman')->textInput(['maxlength' => true, 'placeholder' => 'Namahalaman']) */ ?>

    <?php /* echo $form->field($model, 'isaktifpertanyaan')->textInput(['placeholder' => 'Isaktifpertanyaan']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
