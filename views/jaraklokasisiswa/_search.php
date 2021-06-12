<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JaraklokasisiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jaraklokasisiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jaraklokasisiswa_id')->textInput(['placeholder' => 'Jaraklokasisiswa']) ?>

    <?= $form->field($model, 'namajaraklokasisiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namajaraklokasisiswa']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
