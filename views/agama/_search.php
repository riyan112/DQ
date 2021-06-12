<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AgamaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-agama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'agama_id')->textInput(['placeholder' => 'Agama']) ?>

    <?= $form->field($model, 'namaagama')->textInput(['maxlength' => true, 'placeholder' => 'Namaagama']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
