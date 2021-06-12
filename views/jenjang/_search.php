<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenjangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-jenjang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'jenjang_sekolah_id')->textInput(['placeholder' => 'Jenjang Sekolah']) ?>

    <?= $form->field($model, 'nama_jenjang')->textInput(['maxlength' => true, 'placeholder' => 'Nama Jenjang']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
