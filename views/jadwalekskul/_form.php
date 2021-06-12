<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalekskul */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Presensiekskul', 
        'relID' => 'presensiekskul', 
        'value' => \yii\helpers\Json::encode($model->presensiekskuls),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="jadwalekskul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jadwalekskul_id')->textInput(['maxlength' => true, 'placeholder' => 'Jadwalekskul']) ?>

    <?= $form->field($model, 'ekskul_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Ekskul::find()->orderBy('ekskul_id')->asArray()->all(), 'ekskul_id', 'ekskul_id'),
        'options' => ['placeholder' => 'Choose Ekskul'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jadwal_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jadwal_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_akhir_masukekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Masukekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_akhir_pulangekskul')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Pulangekskul',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'isaktif')->textInput(['placeholder' => 'Isaktif']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensiekskul'),
            'content' => $this->render('_formPresensiekskul', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensiekskuls),
            ]),
        ],
    ];
    echo kartik\tabs\TabsX::widget([
        'items' => $forms,
        'position' => kartik\tabs\TabsX::POS_ABOVE,
        'encodeLabels' => false,
        'pluginOptions' => [
            'bordered' => true,
            'sideways' => true,
            'enableCache' => false,
        ],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
