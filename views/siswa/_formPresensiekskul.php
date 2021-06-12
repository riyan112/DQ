<div class="form-group" id="add-presensiekskul">
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
    'formName' => 'Presensiekskul',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'presensiekskul_id' => ['type' => TabularForm::INPUT_TEXT],
        'jadwalekskul_id' => [
            'label' => 'Jadwalekskul',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalekskul::find()->orderBy('jadwalekskul_id')->asArray()->all(), 'jadwalekskul_id', 'jadwalekskul_id'),
                'options' => ['placeholder' => 'Choose Jadwalekskul'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'tgl_presensiekskkul' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgl Presensiekskkul',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'statuskehadiranekskul' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'HADIR' => 'HADIR', 'IZIN' => 'IZIN', 'SAKIT' => 'SAKIT', 'TANPA KETERANGAN' => 'TANPA KETERANGAN', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Statuskehadiranekskul'],
                    ]
        ],
        'izinekskul_id' => [
            'label' => 'Izinekskul',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Izinekskul::find()->orderBy('izinekskul_id')->asArray()->all(), 'izinekskul_id', 'izinekskul_id'),
                'options' => ['placeholder' => 'Choose Izinekskul'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jam_masukekskul' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Jam Masukekskul',
                        'autoclose' => true
                    ]
                ]
            ]
        ],
        'jam_pulangekskul' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
                'saveFormat' => 'php:H:i:s',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Jam Pulangekskul',
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
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPresensiekskul(' . $key . '); return false;', 'id' => 'presensiekskul-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Presensiekskul', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPresensiekskul()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

