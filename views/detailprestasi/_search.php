<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailprestasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-detailprestasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'detailprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('detailprestasi_id')->asArray()->all(), 'detailprestasi_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'bidangprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Bidangprestasi::find()->orderBy('bidangprestasi_id')->asArray()->all(), 'bidangprestasi_id', 'bidangprestasi_id'),
        'options' => ['placeholder' => 'Choose Bidangprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tingkatprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Tingkatprestasi::find()->orderBy('tingkatprestasi_id')->asArray()->all(), 'tingkatprestasi_id', 'tingkatprestasi_id'),
        'options' => ['placeholder' => 'Choose Tingkatprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'peringkat_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Peringkat::find()->orderBy('peringkat_id')->asArray()->all(), 'peringkat_id', 'peringkat_id'),
        'options' => ['placeholder' => 'Choose Peringkat'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'tahunmeraihprestasi')->textInput(['maxlength' => true, 'placeholder' => 'Tahunmeraihprestasi']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
