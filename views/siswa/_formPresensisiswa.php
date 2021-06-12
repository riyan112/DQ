<div class="form-group" id="add-presensisiswa">
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
    'formName' => 'Presensisiswa',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'presensisiswa_id' => ['type' => TabularForm::INPUT_TEXT],
        'jadwalpresensisiswa_id' => [
            'label' => 'Jadwalpresensisiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensisiswa::find()->orderBy('jadwalpresensisiswa_id')->asArray()->all(), 'jadwalpresensisiswa_id', 'jadwalpresensisiswa_id'),
                'options' => ['placeholder' => 'Choose Jadwalpresensisiswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'tgl_presensi' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Presensi',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'statuskehadiran' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'HADIR' => 'HADIR', 'IJIN' => 'IJIN', 'SAKIT' => 'SAKIT', 'TANPA KETERANGAN' => 'TANPA KETERANGAN', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Statuskehadiran'],
                    ]
        ],
        'izinsiswa_id' => [
            'label' => 'Izinsiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Izinsiswa::find()->orderBy('izinsiswa_id')->asArray()->all(), 'izinsiswa_id', 'izinsiswa_id'),
                'options' => ['placeholder' => 'Choose Izinsiswa'],
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPresensisiswa(' . $key . '); return false;', 'id' => 'presensisiswa-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Presensisiswa', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPresensisiswa()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

