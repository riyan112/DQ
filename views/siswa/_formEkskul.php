<div class="form-group" id="add-ekskul">
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
    'formName' => 'Ekskul',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'ekskul_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'jenisekskul_id' => [
            'label' => 'Jenisekskul',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisekskul::find()->orderBy('jenisekskul_id')->asArray()->all(), 'jenisekskul_id', 'jenisekskul_id'),
                'options' => ['placeholder' => 'Choose Jenisekskul'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'nilai' => ['type' => TabularForm::INPUT_TEXT],
        'keterangan' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowEkskul(' . $key . '); return false;', 'id' => 'ekskul-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Ekskul', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowEkskul()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

