<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ekskul */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Jadwalekskul', 
        'relID' => 'jadwalekskul', 
        'value' => \yii\helpers\Json::encode($model->jadwalekskuls),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="ekskul-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'ekskul_id')->textInput(['placeholder' => 'Ekskul']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'jenisekskul_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Jenisekskul::find()->orderBy('jenisekskul_id')->asArray()->all(), 'jenisekskul_id', 'jenisekskul_id'),
        'options' => ['placeholder' => 'Choose Jenisekskul'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true, 'placeholder' => 'Nilai']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Jadwalekskul'),
            'content' => $this->render('_formJadwalekskul', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->jadwalekskuls),
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
