<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alumni */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Pengisiantracer', 
        'relID' => 'pengisiantracer', 
        'value' => \yii\helpers\Json::encode($model->pengisiantracers),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="alumni-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'alumni_id')->textInput(['placeholder' => 'Alumni']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true, 'placeholder' => 'Nis']) ?>

    <?= $form->field($model, 'nisn')->textInput(['maxlength' => true, 'placeholder' => 'Nisn']) ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'placeholder' => 'Nik']) ?>

    <?= $form->field($model, 'namasiswa')->textInput(['maxlength' => true, 'placeholder' => 'Namasiswa']) ?>

    <?= $form->field($model, 'tanggalproses')->textInput(['placeholder' => 'Tanggalproses']) ?>

    <?= $form->field($model, 'isproses')->textInput(['placeholder' => 'Isproses']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Pengisiantracer'),
            'content' => $this->render('_formPengisiantracer', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->pengisiantracers),
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
