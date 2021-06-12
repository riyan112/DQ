<div class="form-group" id="add-sekolah">
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
    'formName' => 'Sekolah',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'sekolah_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'nsm' => ['type' => TabularForm::INPUT_TEXT],
        'npsn' => ['type' => TabularForm::INPUT_TEXT],
        'nama_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'alamat_sekolah' => ['type' => TabularForm::INPUT_TEXT],
        'kelurahan' => ['type' => TabularForm::INPUT_TEXT],
        'kecamatan' => ['type' => TabularForm::INPUT_TEXT],
        'kabupaten' => ['type' => TabularForm::INPUT_TEXT],
        'provinsi' => ['type' => TabularForm::INPUT_TEXT],
        'kode_pos' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowSekolah(' . $key . '); return false;', 'id' => 'sekolah-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Sekolah', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowSekolah()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

