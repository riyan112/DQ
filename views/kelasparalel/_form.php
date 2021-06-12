<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kelasparalel */
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

<div class="kelasparalel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'kelasparalel_id')->textInput(['placeholder' => 'Kelasparalel']) ?>

    <?= $form->field($model, 'namakelasparalel')->textInput(['maxlength' => true, 'placeholder' => 'Namakelasparalel']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

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
