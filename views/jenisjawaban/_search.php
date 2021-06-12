<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisjawabanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenisjawaban-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenisjawaban_id')->textInput(['placeholder' => 'Jenisjawaban']) ?>

    <?= $form->field($model, 'keteranganjawaban')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganjawaban']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
