<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailpengisiantracerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-detailpengisiantracer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'detailpengisiantracer_id')->textInput(['placeholder' => 'Detailpengisiantracer']) ?>

    <?= $form->field($model, 'pengisiantracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pengisiantracer::find()->orderBy('pengisiantracer_id')->asArray()->all(), 'pengisiantracer_id', 'pengisiantracer_id'),
        'options' => ['placeholder' => 'Choose Pengisiantracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'periodetracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Periodetracer::find()->orderBy('periodetracer_id')->asArray()->all(), 'periodetracer_id', 'periodetracer_id'),
        'options' => ['placeholder' => 'Choose Periodetracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'pertanyaan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pertanyaan::find()->orderBy('pertanyaan_id')->asArray()->all(), 'pertanyaan_id', 'pertanyaan_id'),
        'options' => ['placeholder' => 'Choose Pertanyaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jawaban_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jawabantracer::find()->orderBy('jawaban_id')->asArray()->all(), 'jawaban_id', 'jawaban_id'),
        'options' => ['placeholder' => 'Choose Jawabantracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'jawabanesai')->textInput(['maxlength' => true, 'placeholder' => 'Jawabanesai']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
