<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PekerjaanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pekerjaan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pekerjaan_id')->textInput(['placeholder' => 'Pekerjaan']) ?>

    <?= $form->field($model, 'namapekerjaan')->textInput(['maxlength' => true, 'placeholder' => 'Namapekerjaan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
