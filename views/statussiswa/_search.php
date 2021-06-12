<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StatussiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-statussiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'statussiswa_id')->textInput(['placeholder' => 'Statussiswa']) ?>

    <?= $form->field($model, 'namastatussiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namastatussiswa']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
