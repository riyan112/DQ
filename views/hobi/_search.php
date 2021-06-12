<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HobiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-hobi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hobi_id')->textInput(['placeholder' => 'Hobi']) ?>

    <?= $form->field($model, 'namahobi')->textInput(['maxlength' => true, 'placeholder' => 'Namahobi']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
