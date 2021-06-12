<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sekolah */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Siswa', 
        'relID' => 'siswa', 
        'value' => \yii\helpers\Json::encode($model->siswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="sekolah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'sekolah_id')->textInput(['placeholder' => 'Sekolah']) ?>

    <?= $form->field($model, 'jenjang_sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenjang::find()->orderBy('jenjang_sekolah_id')->asArray()->all(), 'jenjang_sekolah_id', 'nama_jenjang'),
        'options' => ['placeholder' => 'Choose Jenjang'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nsm')->textInput(['placeholder' => 'Nsm']) ?>

    <?= $form->field($model, 'npsn')->textInput(['placeholder' => 'Npsn']) ?>

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) ?>

    <?= $form->field($model, 'alamat_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Alamat Sekolah']) ?>

    <?= $form->field($model, 'kelurahan')->textInput(['maxlength' => true, 'placeholder' => 'Kelurahan']) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'placeholder' => 'Kecamatan']) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true, 'placeholder' => 'Kabupaten']) ?>

    <?= $form->field($model, 'provinsi')->textInput(['maxlength' => true, 'placeholder' => 'Provinsi']) ?>

    <?= $form->field($model, 'kode_pos')->textInput(['placeholder' => 'Kode Pos']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Siswa'),
            'content' => $this->render('_formSiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->siswas),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
