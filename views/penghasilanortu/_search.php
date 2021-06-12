<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenghasilanortuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-penghasilanortu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'penghasilanortu_id')->textInput(['placeholder' => 'Penghasilanortu']) ?>

    <?= $form->field($model, 'keteranganpenghasilanortu')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganpenghasilanortu']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
