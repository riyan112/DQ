<div class="form-group" id="add-jawabantracer">
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
    'formName' => 'Jawabantracer',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'jawaban_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'pertanyaan_id' => [
            'label' => 'Pertanyaan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pertanyaan::find()->orderBy('pertanyaan_id')->asArray()->all(), 'pertanyaan_id', 'pertanyaan_id'),
                'options' => ['placeholder' => 'Choose Pertanyaan'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'isijawaban' => ['type' => TabularForm::INPUT_TEXT],
        'nourut' => ['type' => TabularForm::INPUT_TEXT],
        'bobot' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowJawabantracer(' . $key . '); return false;', 'id' => 'jawabantracer-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Jawabantracer', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowJawabantracer()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

