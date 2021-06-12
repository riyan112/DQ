<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengisiantracerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-pengisiantracer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pengisiantracer_id')->textInput(['placeholder' => 'Pengisiantracer']) ?>

    <?= $form->field($model, 'alumni_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Alumni::find()->orderBy('alumni_id')->asArray()->all(), 'alumni_id', 'alumni_id'),
        'options' => ['placeholder' => 'Choose Alumni'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true, 'placeholder' => 'Saran']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
