<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisbeasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenisbeasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenisbeasiswa_id')->textInput(['placeholder' => 'Jenisbeasiswa']) ?>

    <?= $form->field($model, 'namabeasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namabeasiswa']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
