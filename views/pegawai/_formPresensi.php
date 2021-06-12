<div class="form-group" id="add-presensi">
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
    'formName' => 'Presensi',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'presensi_id' => ['type' => TabularForm::INPUT_TEXT],
        'jadwalpresensi_id' => [
            'label' => 'Jadwalpresensi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensi::find()->orderBy('jadwalpresensi_id')->asArray()->all(), 'jadwalpresensi_id', 'jadwalpresensi_id'),
                'options' => ['placeholder' => 'Choose Jadwalpresensi'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'tgl' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'status_kehadiran' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'HADIR' => 'HADIR', 'IJIN' => 'IJIN', 'CUTI' => 'CUTI', 'SAKIT' => 'SAKIT', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Status Kehadiran'],
                    ]
        ],
        'cuti_id' => [
            'label' => 'Cuti',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Cuti::find()->orderBy('cuti_id')->asArray()->all(), 'cuti_id', 'cuti_id'),
                'options' => ['placeholder' => 'Choose Cuti'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'izin_id' => [
            'label' => 'Izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Izin::find()->orderBy('izin_id')->asArray()->all(), 'izin_id', 'izin_id'),
                'options' => ['placeholder' => 'Choose Izin'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jam_masuk' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Jam Masuk',
                        'autoclose' => true
                    ]
                ]
            ]
        ],
        'jam_pulang' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Jam Pulang',
                        'autoclose' => true
                    ]
                ]
            ]
        ],
        'lokasi' => ['type' => TabularForm::INPUT_TEXT],
        'keterangan' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPresensi(' . $key . '); return false;', 'id' => 'presensi-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Presensi', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPresensi()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

