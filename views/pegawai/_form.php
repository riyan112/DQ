<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Cuti', 
        'relID' => 'cuti', 
        'value' => \yii\helpers\Json::encode($model->cutis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Izin', 
        'relID' => 'izin', 
        'value' => \yii\helpers\Json::encode($model->izins),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'PendidikanPegawai', 
        'relID' => 'pendidikan-pegawai', 
        'value' => \yii\helpers\Json::encode($model->pendidikanPegawais),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Presensi', 
        'relID' => 'presensi', 
        'value' => \yii\helpers\Json::encode($model->presensis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pegawai_id')->textInput(['maxlength' => true, 'placeholder' => 'Pegawai']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true, 'placeholder' => 'Nip']) ?>

    <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pegawai']) ?>

    <?= $form->field($model, 'jk')->textInput(['maxlength' => true, 'placeholder' => 'Jk']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempat Lahir']) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Lahir',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) ?>

    <?= $form->field($model, 'status_kawin')->textInput(['maxlength' => true, 'placeholder' => 'Status Kawin']) ?>

    <?= $form->field($model, 'nama_pasangan')->textInput(['maxlength' => true, 'placeholder' => 'Nama Pasangan']) ?>

    <?= $form->field($model, 'sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'sekolah_id'),
        'options' => ['placeholder' => 'Choose Sekolah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tmt')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tmt',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'statuspegawai_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Statuspegawai::find()->orderBy('statuspegawai_id')->asArray()->all(), 'statuspegawai_id', 'statuspegawai'),
        'options' => ['placeholder' => 'Choose Statuspegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'pangkatgolongan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pangkatgolongan::find()->orderBy('pangkatgolongan_id')->asArray()->all(), 'pangkatgolongan_id', 'pangkatgolongan_id'),
        'options' => ['placeholder' => 'Choose Pangkatgolongan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'pendidikan_id')->textInput(['placeholder' => 'Pendidikan']) ?>

    <?= $form->field($model, 'jurusan')->textInput(['maxlength' => true, 'placeholder' => 'Jurusan']) ?>

    <?= $form->field($model, 'nama_sekolah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Sekolah']) ?>

    <?= $form->field($model, 'sertifikasi')->textInput(['maxlength' => true, 'placeholder' => 'Sertifikasi']) ?>

    <?= $form->field($model, 'status_inpasing')->textInput(['maxlength' => true, 'placeholder' => 'Status Inpasing']) ?>

    <?= $form->field($model, 'jenispegawai_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispegawai::find()->orderBy('jenispegawai_id')->asArray()->all(), 'jenispegawai_id', 'jenispegawai_id'),
        'options' => ['placeholder' => 'Choose Jenispegawai'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tugas_tambahan')->textInput(['maxlength' => true, 'placeholder' => 'Tugas Tambahan']) ?>

    <?= $form->field($model, 'kaderisasi_nu')->textInput(['maxlength' => true, 'placeholder' => 'Kaderisasi Nu']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Cuti'),
            'content' => $this->render('_formCuti', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->cutis),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Izin'),
            'content' => $this->render('_formIzin', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->izins),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('PendidikanPegawai'),
            'content' => $this->render('_formPendidikanPegawai', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pendidikanPegawais),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensi'),
            'content' => $this->render('_formPresensi', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensis),
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
