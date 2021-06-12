<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Izinsiswa */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'Presensisiswa', 
        'relID' => 'presensisiswa', 
        'value' => \yii\helpers\Json::encode($model->presensisiswas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="izinsiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'izinsiswa_id')->textInput(['placeholder' => 'Izinsiswa']) ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'keterangan_izin')->textInput(['maxlength' => true, 'placeholder' => 'Keterangan Izin']) ?>

    <?= $form->field($model, 'tgl_izin')->widget(\kartik\datecontrol\DateControl::classname(), [
        'type' => \kartik\datecontrol\DateControl::FORMAT_DATE,
        'saveFormat' => 'php:Y-m-d',
        'ajaxConversion' => true,
        'options' => [
            'pluginOptions' => [
                'placeholder' => 'Choose Tgl Izin',
                'autoclose' => true
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'bukti')->textInput(['maxlength' => true, 'placeholder' => 'Bukti']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('Presensisiswa'),
            'content' => $this->render('_formPresensisiswa', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->presensisiswas),
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
