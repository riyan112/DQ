<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlattransportasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-alattransportasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'alattransportasi_id')->textInput(['placeholder' => 'Alattransportasi']) ?>

    <?= $form->field($model, 'namaalattransportasi')->textInput(['maxlength' => true, 'placeholder' => 'Namaalattransportasi']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
