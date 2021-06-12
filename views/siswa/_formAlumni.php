<div class="form-group" id="add-alumni">
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
    'formName' => 'Alumni',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'alumni_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'nis' => ['type' => TabularForm::INPUT_TEXT],
        'nisn' => ['type' => TabularForm::INPUT_TEXT],
        'nik' => ['type' => TabularForm::INPUT_TEXT],
        'namasiswa' => ['type' => TabularForm::INPUT_TEXT],
        'tanggalproses' => ['type' => TabularForm::INPUT_TEXT],
        'isproses' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowAlumni(' . $key . '); return false;', 'id' => 'alumni-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Alumni', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowAlumni()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

