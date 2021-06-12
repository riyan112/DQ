<div class="form-group" id="add-periodetracer">
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
    'formName' => 'Periodetracer',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'periodetracer_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'keteranganperiodetracer' => ['type' => TabularForm::INPUT_TEXT],
        'tahun' => ['type' => TabularForm::INPUT_TEXT],
        'isaktifperiode' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPeriodetracer(' . $key . '); return false;', 'id' => 'periodetracer-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Periodetracer', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPeriodetracer()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

