<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KelasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-kelas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kelas_id')->textInput(['placeholder' => 'Kelas']) ?>

    <?= $form->field($model, 'namakelas')->textInput(['maxlength' => true, 'placeholder' => 'Namakelas']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
