<div class="form-group" id="add-user-visit-log">
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
    'formName' => 'UserVisitLog',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions' => ['hidden'=>true]],
        'token' => ['type' => TabularForm::INPUT_TEXT],
        'ip' => ['type' => TabularForm::INPUT_TEXT],
        'language' => ['type' => TabularForm::INPUT_TEXT],
        'user_agent' => ['type' => TabularForm::INPUT_TEXT],
        'visit_time' => ['type' => TabularForm::INPUT_TEXT],
        'browser' => ['type' => TabularForm::INPUT_TEXT],
        'os' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => 'raw',
            'label' => '',
            'value' => function($model, $key) {
                return
                    Html::hiddenInput('Children[' . $key . '][id]', (!empty($model['id'])) ? $model['id'] : "") .
                    Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  'Delete', 'onClick' => 'delRowUserVisitLog(' . $key . '); return false;', 'id' => 'user-visit-log-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => false,
            'type' => GridView::TYPE_DEFAULT,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . 'Add User Visit Log', ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowUserVisitLog()']),
        ]
    ]
]);
echo  "    </div>\n\n";
?>

