<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MutasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-mutasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'mutasi_id')->textInput(['placeholder' => 'Mutasi']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tgl_mutasi')->textInput(['placeholder' => 'Tgl Mutasi']) ?>

    <?= $form->field($model, 'keteranganmutasi')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganmutasi']) ?>

    <?= $form->field($model, 'isapproval')->textInput(['placeholder' => 'Isapproval']) ?>

    <?php /* echo $form->field($model, 'tgl_approval')->textInput(['placeholder' => 'Tgl Approval']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
