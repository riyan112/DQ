<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensisiswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Presensisiswa', 
        'relID' => 'presensisiswa', 
        'value' => \yii\helpers\Json::encode($model->presensisiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="jadwalpresensisiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jadwalpresensisiswa_id')->textInput(['maxlength' => true, 'placeholder' => 'Jadwalpresensisiswa']) ?>

    <?= $form->field($model, 'jadwal_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'jadwal_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Jadwal Pulang',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_akhir_masuk')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Masuk',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_awal_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Awal Pulang',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'batas_akhir_pulang')->widget(\kartik\datecontrol\DateControl::className(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_TIME,
        'saveFormat' => 'php:H:i:s',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Batas Akhir Pulang',
                'autoclose' => true
            ]
        ]
    ]); ?>

    <?= $form->field($model, 'isaktif')->textInput(['placeholder' => 'Isaktif']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensisiswa'),
            'content' => $this->render('_formPresensisiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensisiswas),
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
