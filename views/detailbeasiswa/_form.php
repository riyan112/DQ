<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detailbeasiswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Siswa', 
        'relID' => 'siswa', 
        'value' => \yii\helpers\Json::encode($model->siswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="detailbeasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'detailbeasiswa_id')->textInput(['placeholder' => 'Detailbeasiswa']) ?>

    <?= $form->field($model, 'jenisbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisbeasiswa::find()->orderBy('jenisbeasiswa_id')->asArray()->all(), 'jenisbeasiswa_id', 'namabeasiswa'),
        'options' => ['placeholder' => 'Choose Jenisbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'sumberbeasiswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Sumberbeasiswa::find()->orderBy('sumberbeasiswa_id')->asArray()->all(), 'sumberbeasiswa_id', 'namasumberbeasiswa'),
        'options' => ['placeholder' => 'Choose Sumberbeasiswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jangkawaktu')->textInput(['maxlength' => true, 'placeholder' => 'Jangkawaktu']) ?>

    <?= $form->field($model, 'nominalditerima')->textInput(['maxlength' => true, 'placeholder' => 'Nominalditerima']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Siswa'),
            'content' => $this->render('_formSiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->siswas),
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
