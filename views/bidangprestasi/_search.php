<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BidangprestasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-bidangprestasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bidangprestasi_id')->textInput(['placeholder' => 'Bidangprestasi']) ?>

    <?= $form->field($model, 'namabidangprestasi')->textInput(['maxlength' => true, 'placeholder' => 'Namabidangprestasi']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
