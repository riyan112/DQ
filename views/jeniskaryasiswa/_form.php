<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskaryasiswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Hasilkaryasiswa', 
        'relID' => 'hasilkaryasiswa', 
        'value' => \yii\helpers\Json::encode($model->hasilkaryasiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="jeniskaryasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'jeniskaryasiswa_id')->textInput(['placeholder' => 'Jeniskaryasiswa']) ?>

    <?= $form->field($model, 'namajeniskaryasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namajeniskaryasiswa']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Hasilkaryasiswa'),
            'content' => $this->render('_formHasilkaryasiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->hasilkaryasiswas),
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
