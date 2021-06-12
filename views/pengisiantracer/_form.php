<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pengisiantracer */
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

<div class="pengisiantracer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'pengisiantracer_id')->textInput(['placeholder' => 'Pengisiantracer']) ?>

    <?= $form->field($model, 'alumni_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Alumni::find()->orderBy('alumni_id')->asArray()->all(), 'alumni_id', 'alumni_id'),
        'options' => ['placeholder' => 'Choose Alumni'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'saran')->textInput(['maxlength' => true, 'placeholder' => 'Saran']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

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
