<div class="form-group" id="add-detailbeasiswa">
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
    'formName' => 'Detailbeasiswa',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'detailbeasiswa_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'sumberbeasiswa_id' => [
            'label' => 'Sumberbeasiswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Sumberbeasiswa::find()->orderBy('sumberbeasiswa_id')->asArray()->all(), 'sumberbeasiswa_id', 'sumberbeasiswa_id'),
                'options' => ['placeholder' => 'Choose Sumberbeasiswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jangkawaktu' => ['type' => TabularForm::INPUT_TEXT],
        'nominalditerima' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowDetailbeasiswa(' . $key . '); return false;', 'id' => 'detailbeasiswa-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Detailbeasiswa', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowDetailbeasiswa()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

