<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendidikanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pendidikan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pendidikan_id')->textInput(['placeholder' => 'Pendidikan']) ?>

    <?= $form->field($model, 'namapendidikan')->textInput(['maxlength' => true, 'placeholder' => 'Namapendidikan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
