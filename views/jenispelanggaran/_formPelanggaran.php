<div class="form-group" id="add-pelanggaran">
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
    'formName' => 'Pelanggaran',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        'pelanggaran_id' => ['type' => TabularForm::INPUT_HIDDEN],
        'siswa_id' => [
            'label' => 'Siswa',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
                'options' => ['placeholder' => 'Choose Siswa'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pegawai_id' => ['type' => TabularForm::INPUT_TEXT],
        'jeniskonseling_id' => [
            'label' => 'Jeniskonseling',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskonseling::find()->orderBy('jeniskonseling_id')->asArray()->all(), 'jeniskonseling_id', 'jeniskonseling_id'),
                'options' => ['placeholder' => 'Choose Jeniskonseling'],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'keteranganpelanggaran' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowPelanggaran(' . $key . '); return false;', 'id' => 'pelanggaran-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add Pelanggaran', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPelanggaran()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

