<div class="form-group" id="add-cuti">
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
    'formName' => 'Cuti',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'cuti_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'keterangan_cuti' => ['type' => TabularForm::INPUT_TEXT],
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
        'statuspengajuan_id' => [
            'label' => 'Statuspengajuan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Statuspengajuan::find()->orderBy('statuspengajuan_id')->asArray()->all(), 'statuspengajuan_id', 'statuspengajuan_id'),
                'options' => ['placeholder' => 'Choose Statuspengajuan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'bukti' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowCuti(' . $key . '); return false;', 'id' => 'cuti-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Cuti', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowCuti()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

