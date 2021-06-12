<div class="form-group" id="add-mutasi">
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
    'formName' => 'Mutasi',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'mutasi_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'tgl_mutasi' => ['type' => TabularForm::INPUT_TEXT],
        'keteranganmutasi' => ['type' => TabularForm::INPUT_TEXT],
        'isapproval' => ['type' => TabularForm::INPUT_TEXT],
        'tgl_approval' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowMutasi(' . $key . '); return false;', 'id' => 'mutasi-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Mutasi', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowMutasi()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

