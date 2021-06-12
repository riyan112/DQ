<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Detailprestasi', 
        'relID' => 'detailprestasi', 
        'value' => \yii\helpers\Json::encode($model->detailprestasis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>
<?php $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Siswa'),
            'content' => $this->render('_form1', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->detailprestasi),
            ]),
        ],
    ];
    ?>
<div class="siswa-form">

<?php $form = ActiveForm::begin(); ?>

<?= $form->errorSummary($model); ?>

<?php // $form->field($model, 'siswa_id')->textInput(['placeholder' => 'Siswa']) ?>

<?= $form->field($model, 'nis')->textInput(['maxlength' => true, 'placeholder' => 'Nis']) ?>

<?= $form->field($model, 'nisn')->textInput(['maxlength' => true, 'placeholder' => 'Nisn']) ?>

<?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'Nik']) ?>

<?= $form->field($model, 'namasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Nama Siswa']) ?>

<?= $form->field($model, 'tempatlahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempat lahir']) ?>

<?= $form->field($model, 'tanggallahir')->widget(\kartik\datecontrol\DateControl::classname(), [
    'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
    'saveFormat' => 'php:Y-m-d',
    'ajaxConversion' => true,
    'options' => [
        'pluginOptions' => [
            'placeholder' => 'Choose Tanggal lahir',
            'autoclose' => true
        ]
    ],
]); ?>
</div>