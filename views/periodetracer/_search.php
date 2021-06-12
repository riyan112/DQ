<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeriodetracerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-periodetracer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'periodetracer_id')->textInput(['placeholder' => 'Periodetracer']) ?>

    <?= $form->field($model, 'jenistracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenistracer::find()->orderBy('jenistracer_id')->asArray()->all(), 'jenistracer_id', 'jenistracer_id'),
        'options' => ['placeholder' => 'Choose Jenistracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keteranganperiodetracer')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganperiodetracer']) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true, 'placeholder' => 'Tahun']) ?>

    <?= $form->field($model, 'isaktifperiode')->textInput(['placeholder' => 'Isaktifperiode']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
