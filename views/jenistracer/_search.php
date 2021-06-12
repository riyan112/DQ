<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenistracerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenistracer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenistracer_id')->textInput(['placeholder' => 'Jenistracer']) ?>

    <?= $form->field($model, 'namajenistracer')->textInput(['maxlength' => true, 'placeholder' => 'Namajenistracer']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
