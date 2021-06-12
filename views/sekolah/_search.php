<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SekolahSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-sekolah-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sekolah_id')->textInput(['placeholder' => 'Sekolah']) ?>

    <?= $form->field($model, 'jenjang_sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenjang::find()->orderBy('jenjang_sekolah_id')->asArray()->all(), 'jenjang_sekolah_id', 'jenjang_sekolah_id'),
        'options' => ['placeholder' => 'Choose Jenjang'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nsm')->textInput(['placeholder' => 'Nsm']) ?>

    <?= $form->field($model, 'npsn')->textInput(['placeholder' => 'Npsn']) ?>

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) ?>

    <?php /* echo $form->field($model, 'alamat_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Alamat Sekolah']) */ ?>

    <?php /* echo $form->field($model, 'kelurahan')->textInput(['maxlength' => true, 'placeholder' => 'Kelurahan']) */ ?>

    <?php /* echo $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'placeholder' => 'Kecamatan']) */ ?>

    <?php /* echo $form->field($model, 'kabupaten')->textInput(['maxlength' => true, 'placeholder' => 'Kabupaten']) */ ?>

    <?php /* echo $form->field($model, 'provinsi')->textInput(['maxlength' => true, 'placeholder' => 'Provinsi']) */ ?>

    <?php /* echo $form->field($model, 'kode_pos')->textInput(['placeholder' => 'Kode Pos']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
