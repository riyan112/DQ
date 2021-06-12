<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JawabantracerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jawabantracer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jawaban_id')->textInput(['placeholder' => 'Jawaban']) ?>

    <?= $form->field($model, 'pertanyaan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pertanyaan::find()->orderBy('pertanyaan_id')->asArray()->all(), 'pertanyaan_id', 'pertanyaan_id'),
        'options' => ['placeholder' => 'Choose Pertanyaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenisjawaban_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisjawaban::find()->orderBy('jenisjawaban_id')->asArray()->all(), 'jenisjawaban_id', 'jenisjawaban_id'),
        'options' => ['placeholder' => 'Choose Jenisjawaban'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'isijawaban')->textInput(['maxlength' => true, 'placeholder' => 'Isijawaban']) ?>

    <?= $form->field($model, 'nourut')->textInput(['maxlength' => true, 'placeholder' => 'Nourut']) ?>

    <?php /* echo $form->field($model, 'bobot')->textInput(['maxlength' => true, 'placeholder' => 'Bobot']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
