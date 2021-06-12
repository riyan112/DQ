<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlumniSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-alumni-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alumni_id')->textInput(['placeholder' => 'Alumni']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true, 'placeholder' => 'Nis']) ?>

    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true, 'placeholder' => 'Nisn']) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'Nik']) ?>

    <?php /* echo $form->field($model, 'namasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namasiswa']) */ ?>

    <?php /* echo $form->field($model, 'tanggalproses')->textInput(['placeholder' => 'Tanggalproses']) */ ?>

    <?php /* echo $form->field($model, 'isproses')->textInput(['placeholder' => 'Isproses']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
