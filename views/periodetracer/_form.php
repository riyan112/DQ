<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Periodetracer */
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
        'class' => 'Pertanyaan', 
        'relID' => 'pertanyaan', 
        'value' => \yii\helpers\Json::encode($model->pertanyaans),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="periodetracer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'periodetracer_id')->textInput(['placeholder' => 'Periodetracer']) ?>

    <?= $form->field($model, 'jenistracer_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenistracer::find()->orderBy('jenistracer_id')->asArray()->all(), 'jenistracer_id', 'jenistracer_id'),
        'options' => ['placeholder' => 'Choose Jenistracer'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keteranganperiodetracer')->textInput(['maxlength' => true, 'placeholder' => 'Keteranganperiodetracer']) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true, 'placeholder' => 'Tahun']) ?>

    <?= $form->field($model, 'isaktifperiode')->textInput(['placeholder' => 'Isaktifperiode']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Detailpengisiantracer'),
            'content' => $this->render('_formDetailpengisiantracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->detailpengisiantracers),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Pertanyaan'),
            'content' => $this->render('_formPertanyaan', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pertanyaans),
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
