<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FilezipSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-filezip-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'filezip_id')->textInput(['placeholder' => 'Filezip']) ?>

    <?= $form->field($model, 'namafilezip')->textInput(['maxlength' => true, 'placeholder' => 'Namafilezip']) ?>

    <?= $form->field($model, 'ukuran')->textInput(['placeholder' => 'Ukuran']) ?>

    <?= $form->field($model, 'tgl_upload')->textInput(['placeholder' => 'Tgl Upload']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
