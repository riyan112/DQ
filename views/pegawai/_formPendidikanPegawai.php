<div class="form-group" id="add-pendidikan-pegawai">
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
    'formName' => 'PendidikanPegawai',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'pendidikan_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'ket_pendidikan' => ['type' => TabularForm::INPUT_TEXT],
        'jenjang' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'items' => [ 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'D3' => 'D3', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3', ],
                    'options' => [
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => 'Choose Jenjang'],
                    ]
        ],
        'is_aktif' => ['type' => TabularForm::INPUT_CHECKBOX,
            'options' => [
                'style' => 'position : relative; margin-top : -9px'
            ]
        ],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPendidikanPegawai(' . $key . '); return false;', 'id' => 'pendidikan-pegawai-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Pendidikan Pegawai', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPendidikanPegawai()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

