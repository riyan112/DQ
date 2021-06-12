<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailbeasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-detailbeasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'detailbeasiswa_id')->textInput(['placeholder' => 'Detailbeasiswa']) ?>

    <?= $form->field($model, 'jenisbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisbeasiswa::find()->orderBy('jenisbeasiswa_id')->asArray()->all(), 'jenisbeasiswa_id', 'jenisbeasiswa_id'),
        'options' => ['placeholder' => 'Choose Jenisbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'sumberbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Sumberbeasiswa::find()->orderBy('sumberbeasiswa_id')->asArray()->all(), 'sumberbeasiswa_id', 'sumberbeasiswa_id'),
        'options' => ['placeholder' => 'Choose Sumberbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jangkawaktu')->textInput(['maxlength' => true, 'placeholder' => 'Jangkawaktu']) ?>

    <?= $form->field($model, 'nominalditerima')->textInput(['maxlength' => true, 'placeholder' => 'Nominalditerima']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
