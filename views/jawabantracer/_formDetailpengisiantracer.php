<div class="form-group" id="add-detailpengisiantracer">
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
    'formName' => 'Detailpengisiantracer',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'detailpengisiantracer_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'pengisiantracer_id' => [
            'label' => 'Pengisiantracer',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Pengisiantracer::find()->orderBy('pengisiantracer_id')->asArray()->all(), 'pengisiantracer_id', 'pengisiantracer_id'),
                'options' => ['placeholder' => 'Choose Pengisiantracer'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'periodetracer_id' => [
            'label' => 'Periodetracer',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Periodetracer::find()->orderBy('periodetracer_id')->asArray()->all(), 'periodetracer_id', 'periodetracer_id'),
                'options' => ['placeholder' => 'Choose Periodetracer'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
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
        'jawabanesai' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowDetailpengisiantracer(' . $key . '); return false;', 'id' => 'detailpengisiantracer-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Detailpengisiantracer', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowDetailpengisiantracer()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

