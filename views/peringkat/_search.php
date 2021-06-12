<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeringkatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-peringkat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'peringkat_id')->textInput(['placeholder' => 'Peringkat']) ?>

    <?= $form->field($model, 'keteranganperingkat')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganperingkat']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
