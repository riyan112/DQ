<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\jeniskelaminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jeniskelamin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jeniskelamin_id')->textInput(['maxlength' => true, 'placeholder' => 'Jeniskelamin']) ?>

    <?= $form->field($model, 'namajeniskelamin')->textInput(['maxlength' => true, 'placeholder' => 'Namajeniskelamin']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
