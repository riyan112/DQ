<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'detailprestasi_id'),
        'options' => ['placeholder' => 'Choose Detailprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true, 'placeholder' => 'Nis']) ?>

    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true, 'placeholder' => 'Nisn']) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'Nik']) ?>

    <?= $form->field($model, 'namasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namasiswa']) ?>

    <?php /* echo $form->field($model, 'tempatlahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempatlahir']) */ ?>

    <?php /* echo $form->field($model, 'tanggallahir')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tanggallahir',
                'autoclose' => true
            ]
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jeniskelamin_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskelamin::find()->orderBy('jeniskelamin_id')->asArray()->all(), 'jeniskelamin_id', 'jeniskelamin_id'),
        'options' => ['placeholder' => 'Choose Jeniskelamin'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'agama_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Agama::find()->orderBy('agama_id')->asArray()->all(), 'agama_id', 'agama_id'),
        'options' => ['placeholder' => 'Choose Agama'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'sekolah_id'),
        'options' => ['placeholder' => 'Choose Sekolah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'kelas_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Kelas::find()->orderBy('kelas_id')->asArray()->all(), 'kelas_id', 'kelas_id'),
        'options' => ['placeholder' => 'Choose Kelas'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'kelasparalel_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Kelasparalel::find()->orderBy('kelasparalel_id')->asArray()->all(), 'kelasparalel_id', 'kelasparalel_id'),
        'options' => ['placeholder' => 'Choose Kelasparalel'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'statussiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Statussiswa::find()->orderBy('statussiswa_id')->asArray()->all(), 'statussiswa_id', 'statussiswa_id'),
        'options' => ['placeholder' => 'Choose Statussiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'asalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Asalsekolah::find()->orderBy('asalsekolah_id')->asArray()->all(), 'asalsekolah_id', 'asalsekolah_id'),
        'options' => ['placeholder' => 'Choose Asalsekolah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'hobi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Hobi::find()->orderBy('hobi_id')->asArray()->all(), 'hobi_id', 'hobi_id'),
        'options' => ['placeholder' => 'Choose Hobi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'citacita_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Citacita::find()->orderBy('citacita_id')->asArray()->all(), 'citacita_id', 'citacita_id'),
        'options' => ['placeholder' => 'Choose Citacita'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'jumlahsaudara')->textInput(['placeholder' => 'Jumlahsaudara']) */ ?>

    <?php /* echo $form->field($model, 'jenisasalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisasalsekolah::find()->orderBy('jenisasalsekolah_id')->asArray()->all(), 'jenisasalsekolah_id', 'jenisasalsekolah_id'),
        'options' => ['placeholder' => 'Choose Jenisasalsekolah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'statusasalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Statusasalsekolah::find()->orderBy('statusasalsekolah_id')->asArray()->all(), 'statusasalsekolah_id', 'statusasalsekolah_id'),
        'options' => ['placeholder' => 'Choose Statusasalsekolah'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'kabupatenkotaasalsekolahasal')->textInput(['maxlength' => true, 'placeholder' => 'Kabupatenkotaasalsekolahasal']) */ ?>

    <?php /* echo $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) */ ?>

    <?php /* echo $form->field($model, 'propinsi')->textInput(['maxlength' => true, 'placeholder' => 'Propinsi']) */ ?>

    <?php /* echo $form->field($model, 'kabupaten')->textInput(['maxlength' => true, 'placeholder' => 'Kabupaten']) */ ?>

    <?php /* echo $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'placeholder' => 'Kecamatan']) */ ?>

    <?php /* echo $form->field($model, 'desakelurahan')->textInput(['maxlength' => true, 'placeholder' => 'Desakelurahan']) */ ?>

    <?php /* echo $form->field($model, 'kodepos')->textInput(['maxlength' => true, 'placeholder' => 'Kodepos']) */ ?>

    <?php /* echo $form->field($model, 'jaraklokasisiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jaraklokasisiswa::find()->orderBy('jaraklokasisiswa_id')->asArray()->all(), 'jaraklokasisiswa_id', 'jaraklokasisiswa_id'),
        'options' => ['placeholder' => 'Choose Jaraklokasisiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'alattransportasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Alattransportasi::find()->orderBy('alattransportasi_id')->asArray()->all(), 'alattransportasi_id', 'alattransportasi_id'),
        'options' => ['placeholder' => 'Choose Alattransportasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'tunarungu')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tunanetra')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tunadaksa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tunagrahita')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'tunalaras')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'lambanbelajar')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'sulitbelajar')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'gangguankomunikasi')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'bakatluarbiasa')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'nomorkartukeluarga')->textInput(['maxlength' => true, 'placeholder' => 'Nomorkartukeluarga']) */ ?>

    <?php /* echo $form->field($model, 'namaayah')->textInput(['maxlength' => true, 'placeholder' => 'Namaayah']) */ ?>

    <?php /* echo $form->field($model, 'nikayah')->textInput(['maxlength' => true, 'placeholder' => 'Nikayah']) */ ?>

    <?php /* echo $form->field($model, 'pendidikanayah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'pendidikan_id'),
        'options' => ['placeholder' => 'Choose Pendidikan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'pekerjaanayah_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'pekerjaan_id'),
        'options' => ['placeholder' => 'Choose Pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'namaibu')->textInput(['maxlength' => true, 'placeholder' => 'Namaibu']) */ ?>

    <?php /* echo $form->field($model, 'nikibu')->textInput(['maxlength' => true, 'placeholder' => 'Nikibu']) */ ?>

    <?php /* echo $form->field($model, 'pendidikanibu_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'pendidikan_id'),
        'options' => ['placeholder' => 'Choose Pendidikan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'pekerjaanibu_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'pekerjaan_id'),
        'options' => ['placeholder' => 'Choose Pekerjaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'penghasilanortu_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Penghasilanortu::find()->orderBy('penghasilanortu_id')->asArray()->all(), 'penghasilanortu_id', 'penghasilanortu_id'),
        'options' => ['placeholder' => 'Choose Penghasilanortu'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'nomorkkskps')->textInput(['maxlength' => true, 'placeholder' => 'Nomorkkskps']) */ ?>

    <?php /* echo $form->field($model, 'nomorpkh')->textInput(['maxlength' => true, 'placeholder' => 'Nomorpkh']) */ ?>

    <?php /* echo $form->field($model, 'nomorkip')->textInput(['maxlength' => true, 'placeholder' => 'Nomorkip']) */ ?>

    <?php /* echo $form->field($model, 'statuspenerimapipbsm')->checkbox() */ ?>

    <?php /* echo $form->field($model, 'alasanstatuspenerimaapipbsm')->textInput(['maxlength' => true, 'placeholder' => 'Alasanstatuspenerimaapipbsm']) */ ?>

    <?php /* echo $form->field($model, 'periodepenerimaanpipbsm')->textInput(['maxlength' => true, 'placeholder' => 'Periodepenerimaanpipbsm']) */ ?>

    <?php /* echo $form->field($model, 'detailprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->orderBy('detailprestasi_id')->asArray()->all(), 'detailprestasi_id', 'detailprestasi_id'),
        'options' => ['placeholder' => 'Choose Detailprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'detailbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailbeasiswa::find()->orderBy('detailbeasiswa_id')->asArray()->all(), 'detailbeasiswa_id', 'detailbeasiswa_id'),
        'options' => ['placeholder' => 'Choose Detailbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); */ ?>

    <?php /* echo $form->field($model, 'fotosiswa')->textInput(['maxlength' => true, 'placeholder' => 'Fotosiswa']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
