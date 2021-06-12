<div class="form-group" id="add-siswa">
<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
    'pagination' => [
        'pageSize' => -1
    ]
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'Siswa',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'siswa_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'nis' => ['type' => TabularForm::INPUT_TEXT],
        'nisn' => ['type' => TabularForm::INPUT_TEXT],
        'nik' => ['type' => TabularForm::INPUT_TEXT],
        'namasiswa' => ['type' => TabularForm::INPUT_TEXT],
        'tempatlahir' => ['type' => TabularForm::INPUT_TEXT],
        'tanggallahir' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tanggallahir',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'jeniskelamin_id' => [
            'label' => 'Jeniskelamin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskelamin::find()->orderBy('jeniskelamin_id')->asArray()->all(), 'jeniskelamin_id', 'jeniskelamin_id'),
                'options' => ['placeholder' => 'Choose Jeniskelamin'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'agama_id' => [
            'label' => 'Agama',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Agama::find()->orderBy('agama_id')->asArray()->all(), 'agama_id', 'agama_id'),
                'options' => ['placeholder' => 'Choose Agama'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'sekolah_id' => [
            'label' => 'Sekolah',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->orderBy('sekolah_id')->asArray()->all(), 'sekolah_id', 'sekolah_id'),
                'options' => ['placeholder' => 'Choose Sekolah'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'kelas_id' => [
            'label' => 'Kelas',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Kelas::find()->orderBy('kelas_id')->asArray()->all(), 'kelas_id', 'kelas_id'),
                'options' => ['placeholder' => 'Choose Kelas'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'statussiswa_id' => [
            'label' => 'Statussiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statussiswa::find()->orderBy('statussiswa_id')->asArray()->all(), 'statussiswa_id', 'statussiswa_id'),
                'options' => ['placeholder' => 'Choose Statussiswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'asalsekolah_id' => [
            'label' => 'Asalsekolah',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Asalsekolah::find()->orderBy('asalsekolah_id')->asArray()->all(), 'asalsekolah_id', 'asalsekolah_id'),
                'options' => ['placeholder' => 'Choose Asalsekolah'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'hobi_id' => [
            'label' => 'Hobi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Hobi::find()->orderBy('hobi_id')->asArray()->all(), 'hobi_id', 'hobi_id'),
                'options' => ['placeholder' => 'Choose Hobi'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'citacita_id' => [
            'label' => 'Citacita',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Citacita::find()->orderBy('citacita_id')->asArray()->all(), 'citacita_id', 'citacita_id'),
                'options' => ['placeholder' => 'Choose Citacita'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jumlahsaudara' => ['type' => TabularForm::INPUT_TEXT],
        'jenisasalsekolah_id' => [
            'label' => 'Jenisasalsekolah',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisasalsekolah::find()->orderBy('jenisasalsekolah_id')->asArray()->all(), 'jenisasalsekolah_id', 'jenisasalsekolah_id'),
                'options' => ['placeholder' => 'Choose Jenisasalsekolah'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'statusasalsekolah_id' => [
            'label' => 'Statusasalsekolah',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statusasalsekolah::find()->orderBy('statusasalsekolah_id')->asArray()->all(), 'statusasalsekolah_id', 'statusasalsekolah_id'),
                'options' => ['placeholder' => 'Choose Statusasalsekolah'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'kabupatenkotaasalsekolahasal' => ['type' => TabularForm::INPUT_TEXT],
        'alamat' => ['type' => TabularForm::INPUT_TEXT],
        'propinsi' => ['type' => TabularForm::INPUT_TEXT],
        'kabupaten' => ['type' => TabularForm::INPUT_TEXT],
        'kecamatan' => ['type' => TabularForm::INPUT_TEXT],
        'desakelurahan' => ['type' => TabularForm::INPUT_TEXT],
        'kodepos' => ['type' => TabularForm::INPUT_TEXT],
        'jaraklokasisiswa_id' => [
            'label' => 'Jaraklokasisiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jaraklokasisiswa::find()->orderBy('jaraklokasisiswa_id')->asArray()->all(), 'jaraklokasisiswa_id', 'jaraklokasisiswa_id'),
                'options' => ['placeholder' => 'Choose Jaraklokasisiswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'alattransportasi_id' => [
            'label' => 'Alattransportasi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Alattransportasi::find()->orderBy('alattransportasi_id')->asArray()->all(), 'alattransportasi_id', 'alattransportasi_id'),
                'options' => ['placeholder' => 'Choose Alattransportasi'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'tunarungu' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tunanetra' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tunadaksa' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tunagrahita' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'tunalaras' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'lambanbelajar' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'sulitbelajar' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'gangguankomunikasi' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'bakatluarbiasa' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'nomorkartukeluarga' => ['type' => TabularForm::INPUT_TEXT],
        'namaayah' => ['type' => TabularForm::INPUT_TEXT],
        'nikayah' => ['type' => TabularForm::INPUT_TEXT],
        'pendidikanayah_id' => [
            'label' => 'Pendidikan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'pendidikan_id'),
                'options' => ['placeholder' => 'Choose Pendidikan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pekerjaanayah_id' => [
            'label' => 'Pekerjaan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'pekerjaan_id'),
                'options' => ['placeholder' => 'Choose Pekerjaan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'namaibu' => ['type' => TabularForm::INPUT_TEXT],
        'nikibu' => ['type' => TabularForm::INPUT_TEXT],
        'pendidikanibu_id' => [
            'label' => 'Pendidikan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->orderBy('pendidikan_id')->asArray()->all(), 'pendidikan_id', 'pendidikan_id'),
                'options' => ['placeholder' => 'Choose Pendidikan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pekerjaanibu_id' => [
            'label' => 'Pekerjaan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->orderBy('pekerjaan_id')->asArray()->all(), 'pekerjaan_id', 'pekerjaan_id'),
                'options' => ['placeholder' => 'Choose Pekerjaan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'penghasilanortu_id' => [
            'label' => 'Penghasilanortu',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Penghasilanortu::find()->orderBy('penghasilanortu_id')->asArray()->all(), 'penghasilanortu_id', 'penghasilanortu_id'),
                'options' => ['placeholder' => 'Choose Penghasilanortu'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'nomorkkskps' => ['type' => TabularForm::INPUT_TEXT],
        'nomorpkh' => ['type' => TabularForm::INPUT_TEXT],
        'nomorkip' => ['type' => TabularForm::INPUT_TEXT],
        'statuspenerimapipbsm' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'alasanstatuspenerimaapipbsm' => ['type' => TabularForm::INPUT_TEXT],
        'periodepenerimaanpipbsm' => ['type' => TabularForm::INPUT_TEXT],
        'detailprestasi_id' => [
            'label' => 'Detailprestasi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->orderBy('detailprestasi_id')->asArray()->all(), 'detailprestasi_id', 'detailprestasi_id'),
                'options' => ['placeholder' => 'Choose Detailprestasi'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'detailbeasiswa_id' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowSiswa(' . $key . '); return false;', 'id' => 'siswa-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Siswa', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowSiswa()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

