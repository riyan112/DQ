<div class="form-group" id="add-pertanyaan">
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
    'formName' => 'Pertanyaan',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'pertanyaan_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'jenistracer_id' => [
            'label' => 'Jenistracer',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenistracer::find()->orderBy('jenistracer_id')->asArray()->all(), 'jenistracer_id', 'jenistracer_id'),
                'options' => ['placeholder' => 'Choose Jenistracer'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jenispertanyaan_id' => [
            'label' => 'Jenispertanyaan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispertanyaan::find()->orderBy('jenispertanyaan_id')->asArray()->all(), 'jenispertanyaan_id', 'jenispertanyaan_id'),
                'options' => ['placeholder' => 'Choose Jenispertanyaan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'isipertanyaan' => ['type' => TabularForm::INPUT_TEXT],
        'nourut' => ['type' => TabularForm::INPUT_TEXT],
        'halaman' => ['type' => TabularForm::INPUT_TEXT],
        'namahalaman' => ['type' => TabularForm::INPUT_TEXT],
        'isaktifpertanyaan' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPertanyaan(' . $key . '); return false;', 'id' => 'pertanyaan-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Pertanyaan', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPertanyaan()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

