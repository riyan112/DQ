<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Detailpengisiantracer', 
        'relID' => 'detailpengisiantracer', 
        'value' => \yii\helpers\Json::encode($model->detailpengisiantracers),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Jawabantracer', 
        'relID' => 'jawabantracer', 
        'value' => \yii\helpers\Json::encode($model->jawabantracers),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="pertanyaan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pertanyaan_id')->textInput(['placeholder' => 'Pertanyaan']) ?>

    <?= $form->field($model, 'periodetracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Periodetracer::find()->orderBy('periodetracer_id')->asArray()->all(), 'periodetracer_id', 'periodetracer_id'),
        'options' => ['placeholder' => 'Choose Periodetracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenistracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenistracer::find()->orderBy('jenistracer_id')->asArray()->all(), 'jenistracer_id', 'jenistracer_id'),
        'options' => ['placeholder' => 'Choose Jenistracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenispertanyaan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenispertanyaan::find()->orderBy('jenispertanyaan_id')->asArray()->all(), 'jenispertanyaan_id', 'jenispertanyaan_id'),
        'options' => ['placeholder' => 'Choose Jenispertanyaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'isipertanyaan')->textInput(['maxlength' => true, 'placeholder' => 'Isipertanyaan']) ?>

    <?= $form->field($model, 'nourut')->textInput(['maxlength' => true, 'placeholder' => 'Nourut']) ?>

    <?= $form->field($model, 'halaman')->textInput(['maxlength' => true, 'placeholder' => 'Halaman']) ?>

    <?= $form->field($model, 'namahalaman')->textInput(['maxlength' => true, 'placeholder' => 'Namahalaman']) ?>

    <?= $form->field($model, 'isaktifpertanyaan')->textInput(['placeholder' => 'Isaktifpertanyaan']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Detailpengisiantracer'),
            'content' => $this->render('_formDetailpengisiantracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->detailpengisiantracers),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Jawabantracer'),
            'content' => $this->render('_formJawabantracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->jawabantracers),
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
