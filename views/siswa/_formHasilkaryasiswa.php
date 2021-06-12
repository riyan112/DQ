<div class="form-group" id="add-hasilkaryasiswa">
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
    'formName' => 'Hasilkaryasiswa',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'hasilkaryasiswa_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'jeniskaryasiswa_id' => [
            'label' => 'Jeniskaryasiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskaryasiswa::find()->orderBy('jeniskaryasiswa_id')->asArray()->all(), 'jeniskaryasiswa_id', 'jeniskaryasiswa_id'),
                'options' => ['placeholder' => 'Choose Jeniskaryasiswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'judulkaryasiswa' => ['type' => TabularForm::INPUT_TEXT],
        'keterangankaryasiswa' => ['type' => TabularForm::INPUT_TEXT],
        'tgluploadkaryasiswa' => ['type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\datecontrol\DateControl::classname(),
            'options' => [
                'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
                'saveFormat' => 'php:Y-m-d',
                'ajaxConversion' => true,
                'options' => [
                    'pluginOptions' => [
                        'placeholder' => 'Choose Tgluploadkaryasiswa',
                        'autoclose' => true
                    ]
                ],
            ]
        ],
        'portofolio' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowHasilkaryasiswa(' . $key . '); return false;', 'id' => 'hasilkaryasiswa-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Hasilkaryasiswa', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowHasilkaryasiswa()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

