<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CitacitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-citacita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'citacita_id')->textInput(['placeholder' => 'Citacita']) ?>

    <?= $form->field($model, 'namacitacita')->textInput(['maxlength' => true, 'placeholder' => 'Namacitacita']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
