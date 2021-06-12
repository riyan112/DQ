<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Alumni',
        'relID' => 'alumni',
        'value' => \yii\helpers\Json::encode($model->alumnis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Detailprestasi',
        'relID' => 'detailprestasi',
        'value' => \yii\helpers\Json::encode($model->detailprestasis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Ekskul',
        'relID' => 'ekskul',
        'value' => \yii\helpers\Json::encode($model->ekskuls),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Hasilkaryasiswa',
        'relID' => 'hasilkaryasiswa',
        'value' => \yii\helpers\Json::encode($model->hasilkaryasiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Izinekskul',
        'relID' => 'izinekskul',
        'value' => \yii\helpers\Json::encode($model->izinekskuls),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Izinsiswa',
        'relID' => 'izinsiswa',
        'value' => \yii\helpers\Json::encode($model->izinsiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Mutasi',
        'relID' => 'mutasi',
        'value' => \yii\helpers\Json::encode($model->mutasis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Pelanggaran',
        'relID' => 'pelanggaran',
        'value' => \yii\helpers\Json::encode($model->pelanggarans),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Presensiekskul',
        'relID' => 'presensiekskul',
        'value' => \yii\helpers\Json::encode($model->presensiekskuls),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget([
    'viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'Presensisiswa',
        'relID' => 'presensisiswa',
        'value' => \yii\helpers\Json::encode($model->presensisiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="siswa-form">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#datasiswa" aria-controls="datasiswa" role="tab" data-toggle="tab">Data Siswa</a></li>
                <li role="presentation"><a href="#datasekolah" aria-controls="datasekolah" role="tab" data-toggle="tab">Data Sekolah</a></li>
                <li role="presentation"><a href="#sekolahasal" aria-controls="sekolahasal" role="tab" data-toggle="tab">Sekolah Asal</a></li>
                <li role="presentation"><a href="#dataortu" aria-controls="dataortu" role="tab" data-toggle="tab">Data Orang Tua</a></li>
                <li role="presentation"><a href="#databantuan" aria-controls="databantuan" role="tab" data-toggle="tab">Bantuan</a></li>
                <li role="presentation"><a href="#lainnya" aria-controls="lainnya" role="tab" data-toggle="tab">Lainnya</a></li>
            </ul>
            <br>

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->errorSummary($model); ?>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="datasiswa">



                    <?php /* $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'detailprestasi_id'),
                'options' => ['placeholder' => 'Pilih Detailprestasi'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);*/ ?>

                    <?= $form->field($model, 'namasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Nama Siswa']) ?>

                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'NIK']) ?>

                    <?= $form->field($model, 'nis')->textInput(['maxlength' => true, 'placeholder' => 'NIS']) ?>

                    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true, 'placeholder' => 'NISN']) ?>

                    <?= $form->field($model, 'tempatlahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempat Lahir']) ?>

                    <?= $form->field($model, 'tanggallahir')->widget(\kartik\datecontrol\DateControl::classname(), [
                        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                        'saveFormat' => 'php:Y-m-d',
                        'ajaxConversion' => true,
                        'options' => [
                            'pluginOptions' => [
                                'placeholder' => 'Pilih Tanggal Lahir',
                                'autoclose' => true
                            ]
                        ],
                    ]); ?>


                    <?= $form->field($model, 'jeniskelamin_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskelamin::find()->orderBy('jeniskelamin_id')->asArray()->all(), 'jeniskelamin_id', 'namajeniskelamin'),
                        'options' => ['placeholder' => 'Pilih Jenis Kelamin'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'agama_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Agama::find()->orderBy('agama_id')->asArray()->all(), 'agama_id', 'namaagama'),
                        'options' => ['placeholder' => 'Pilih Agama'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'hobi_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Hobi::find()->orderBy('hobi_id')->asArray()->all(), 'hobi_id', 'namahobi'),
                        'options' => ['placeholder' => 'Pilih Hobi'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'citacita_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Citacita::find()->orderBy('citacita_id')->asArray()->all(), 'citacita_id', 'namacitacita'),
                        'options' => ['placeholder' => 'Pilih Cita-cita'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'jumlahsaudara')->textInput(['placeholder' => 'Jumlah Saudara']) ?>

                    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true, 'placeholder' => 'Alamat']) ?>

                    <?= $form->field($model, 'propinsi')->textInput(['maxlength' => true, 'placeholder' => 'Propinsi']) ?>

                    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true, 'placeholder' => 'Kabupaten']) ?>

                    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'placeholder' => 'Kecamatan']) ?>

                    <?= $form->field($model, 'desakelurahan')->textInput(['maxlength' => true, 'placeholder' => 'Desa/kelurahan']) ?>

                    <?= $form->field($model, 'kodepos')->textInput(['maxlength' => true, 'placeholder' => 'Kode Pos']) ?>

                    <?= $form->field($model, 'fotosiswa')->fileInput()->label('Foto Siswa', ['class' => 'create']) ?>
                    <?php if ($model['siswa_id'] == !null) : ?>


                        <img src="<?= '/darulquran/web/img_fotosiswa/' . $model->fotosiswa; ?>" width="300px">
                    <?php endif; ?>

                </div>


                <div role="tabpanel" class="tab-pane" id="datasekolah">

                    <?= $form->field($model, 'sekolah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'nama_sekolah'),
                        'options' => ['placeholder' => 'Pilih Sekolah'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'kelas_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Kelas::find()->orderBy('kelas_id')->asArray()->all(), 'kelas_id', 'namakelas'),
                        'options' => ['placeholder' => 'Pilih Kelas'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'kelasparalel_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Kelasparalel::find()->orderBy('kelasparalel_id')->asArray()->all(), 'kelasparalel_id', 'namakelasparalel'),
                        'options' => ['placeholder' => 'Pilih Kelas Paralel'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'statussiswa_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Statussiswa::find()->orderBy('statussiswa_id')->asArray()->all(), 'statussiswa_id', 'namastatussiswa'),
                        'options' => ['placeholder' => 'Pilih Status Siswa'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                </div>


                <div role="tabpanel" class="tab-pane" id="sekolahasal">

                    <?= $form->field($model, 'asalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Asalsekolah::find()->orderBy('asalsekolah_id')->asArray()->all(), 'asalsekolah_id', 'namaasalsekolah'),
                        'options' => ['placeholder' => 'Pilih Asal Sekolah'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'jenisasalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisasalsekolah::find()->orderBy('jenisasalsekolah_id')->asArray()->all(), 'jenisasalsekolah_id', 'namaasalsekolah'),
                        'options' => ['placeholder' => 'Pilih Jenis Asal Sekolah'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'statusasalsekolah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Statusasalsekolah::find()->orderBy('statusasalsekolah_id')->asArray()->all(), 'statusasalsekolah_id', 'namastatusasalsekolah'),
                        'options' => ['placeholder' => 'Pilih Status Asal Sekolah'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'kabupatenkotaasalsekolahasal')->textInput(['maxlength' => true, 'placeholder' => 'Kabupaten/kota Asalsekolah']) ?>

                </div>



                <div role="tabpanel" class="tab-pane" id="dataortu">

                    <?= $form->field($model, 'nomorkartukeluarga')->textInput(['maxlength' => true, 'placeholder' => 'Nomor Kartu Keluarga']) ?>

                    <?= $form->field($model, 'namaayah')->textInput(['maxlength' => true, 'placeholder' => 'Nama Ayah']) ?>

                    <?= $form->field($model, 'nikayah')->textInput(['maxlength' => true, 'placeholder' => 'NIK Ayah']) ?>

                    <?= $form->field($model, 'pendidikanayah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'namapendidikan'),
                        'options' => ['placeholder' => 'Pilih Pendidikan'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'pekerjaanayah_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'namapekerjaan'),
                        'options' => ['placeholder' => 'Pilih Pekerjaan'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'namaibu')->textInput(['maxlength' => true, 'placeholder' => 'Nama Ibu']) ?>

                    <?= $form->field($model, 'nikibu')->textInput(['maxlength' => true, 'placeholder' => 'NIK Ibu']) ?>

                    <?= $form->field($model, 'pendidikanibu_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'namapendidikan'),
                        'options' => ['placeholder' => 'Pilih Pendidikan'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'pekerjaanibu_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'namapekerjaan'),
                        'options' => ['placeholder' => 'Pilih Pekerjaan'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'penghasilanortu_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Penghasilanortu::find()->orderBy('penghasilanortu_id')->asArray()->all(), 'penghasilanortu_id', 'keteranganpenghasilanortu'),
                        'options' => ['placeholder' => 'Pilih Penghasilan Ortu'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>


                </div>


                <div role="tabpanel" class="tab-pane" id="databantuan">

                    <?= $form->field($model, 'nomorkkskps')->textInput(['maxlength' => true, 'placeholder' => 'Nomor KKSKPS']) ?>

                    <?= $form->field($model, 'nomorpkh')->textInput(['maxlength' => true, 'placeholder' => 'Nomor PKH']) ?>

                    <?= $form->field($model, 'nomorkip')->textInput(['maxlength' => true, 'placeholder' => 'Nomor KIP']) ?>

                    <?= $form->field($model, 'statuspenerimapipbsm')->checkbox() ?>

                    <?= $form->field($model, 'alasanstatuspenerimaapipbsm')->textInput(['maxlength' => true, 'placeholder' => 'Alasan Status Penerimaan PIP BSM']) ?>

                    <?= $form->field($model, 'periodepenerimaanpipbsm')->textInput(['maxlength' => true, 'placeholder' => 'Periode Status Penerimaan PIP BSM']) ?>

                </div>

                <div role="tabpanel" class="tab-pane" id="lainnya">

                    <?= $form->field($model, 'jaraklokasisiswa_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jaraklokasisiswa::find()->orderBy('jaraklokasisiswa_id')->asArray()->all(), 'jaraklokasisiswa_id', 'namajaraklokasisiswa'),
                        'options' => ['placeholder' => 'Pilih Jarak Lokasi Siswa'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'alattransportasi_id')->widget(\kartik\widgets\Select2::classname(), [
                        'data' => \yii\helpers\ArrayHelper::map(\app\models\Alattransportasi::find()->orderBy('alattransportasi_id')->asArray()->all(), 'alattransportasi_id', 'namaalattransportasi'),
                        'options' => ['placeholder' => 'Pilih Alat Transportasi'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); ?>

                    <?= $form->field($model, 'tunarungu')->checkbox() ?>

                    <?= $form->field($model, 'tunanetra')->checkbox() ?>

                    <?= $form->field($model, 'tunadaksa')->checkbox() ?>

                    <?= $form->field($model, 'tunagrahita')->checkbox() ?>

                    <?= $form->field($model, 'tunalaras')->checkbox() ?>

                    <?= $form->field($model, 'lambanbelajar')->checkbox() ?>

                    <?= $form->field($model, 'sulitbelajar')->checkbox() ?>

                    <?= $form->field($model, 'gangguankomunikasi')->checkbox() ?>

                    <?= $form->field($model, 'bakatluarbiasa')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>




        </div>
        <div>












            <?php /* $form->field($model, 'detailprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->orderBy('detailprestasi_id')->asArray()->all(), 'detailprestasi_id', 'detailprestasi_id'),
        'options' => ['placeholder' => 'Pilih Detailprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);*/ ?>

            <?php /*$form->field($model, 'detailbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailbeasiswa::find()->orderBy('detailbeasiswa_id')->asArray()->all(), 'detailbeasiswa_id', 'detailbeasiswa_id'),
        'options' => ['placeholder' => 'Pilih Detailbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);*/ ?>

            <?php // $form->field($model, 'fotosiswa')->textInput(['maxlength' => true, 'placeholder' => 'Fotosiswa']) 
            ?>



            <?php
            /* $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Alumni'),
            'content' => $this->render('_formAlumni', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->alumnis),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Detailprestasi'),
            'content' => $this->render('_formDetailprestasi', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->detailprestasis),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Ekskul'),
            'content' => $this->render('_formEkskul', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->ekskuls),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Hasilkaryasiswa'),
            'content' => $this->render('_formHasilkaryasiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->hasilkaryasiswas),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Izinekskul'),
            'content' => $this->render('_formIzinekskul', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->izinekskuls),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Izinsiswa'),
            'content' => $this->render('_formIzinsiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->izinsiswas),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Mutasi'),
            'content' => $this->render('_formMutasi', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->mutasis),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Pelanggaran'),
            'content' => $this->render('_formPelanggaran', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pelanggarans),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensiekskul'),
            'content' => $this->render('_formPresensiekskul', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensiekskuls),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensisiswa'),
            'content' => $this->render('_formPresensisiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensisiswas),
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
    ]);*/
            ?>


        </div>