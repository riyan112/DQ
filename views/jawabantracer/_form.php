<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jawabantracer */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Detailpengisiantracer', 
        'relID' => 'detailpengisiantracer', 
        'value' => \yii\helpers\Json::encode($model->detailpengisiantracers),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="jawabantracer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jawaban_id')->textInput(['placeholder' => 'Jawaban']) ?>

    <?= $form->field($model, 'pertanyaan_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Pertanyaan::find()->orderBy('pertanyaan_id')->asArray()->all(), 'pertanyaan_id', 'pertanyaan_id'),
        'options' => ['placeholder' => 'Choose Pertanyaan'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenisjawaban_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisjawaban::find()->orderBy('jenisjawaban_id')->asArray()->all(), 'jenisjawaban_id', 'jenisjawaban_id'),
        'options' => ['placeholder' => 'Choose Jenisjawaban'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'isijawaban')->textInput(['maxlength' => true, 'placeholder' => 'Isijawaban']) ?>

    <?= $form->field($model, 'nourut')->textInput(['maxlength' => true, 'placeholder' => 'Nourut']) ?>

    <?= $form->field($model, 'bobot')->textInput(['maxlength' => true, 'placeholder' => 'Bobot']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Detailpengisiantracer'),
            'content' => $this->render('_formDetailpengisiantracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->detailpengisiantracers),
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
