<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KelasparalelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-kelasparalel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kelasparalel_id')->textInput(['placeholder' => 'Kelasparalel']) ?>

    <?= $form->field($model, 'namakelasparalel')->textInput(['maxlength' => true, 'placeholder' => 'Namakelasparalel']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
