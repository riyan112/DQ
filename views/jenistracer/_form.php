<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jenistracer */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Periodetracer', 
        'relID' => 'periodetracer', 
        'value' => \yii\helpers\Json::encode($model->periodetracers),
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

<div class="jenistracer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jenistracer_id')->textInput(['placeholder' => 'Jenistracer']) ?>

    <?= $form->field($model, 'namajenistracer')->textInput(['maxlength' => true, 'placeholder' => 'Namajenistracer']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Periodetracer'),
            'content' => $this->render('_formPeriodetracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->periodetracers),
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
