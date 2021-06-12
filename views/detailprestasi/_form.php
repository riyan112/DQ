<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detailprestasi */
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

<div class="detailprestasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'detailprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('detailprestasi_id')->asArray()->all(), 'detailprestasi_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'siswa_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->orderBy('siswa_id')->asArray()->all(), 'siswa_id', 'siswa_id'),
        'options' => ['placeholder' => 'Choose Siswa'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'bidangprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Bidangprestasi::find()->orderBy('bidangprestasi_id')->asArray()->all(), 'bidangprestasi_id', 'bidangprestasi_id'),
        'options' => ['placeholder' => 'Choose Bidangprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tingkatprestasi_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Tingkatprestasi::find()->orderBy('tingkatprestasi_id')->asArray()->all(), 'tingkatprestasi_id', 'tingkatprestasi_id'),
        'options' => ['placeholder' => 'Choose Tingkatprestasi'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'peringkat_id')->widget(\kartik\widgets\Select2::classname(), [
        'data' => \yii\helpers\ArrayHelper::map(\app\models\Peringkat::find()->orderBy('peringkat_id')->asArray()->all(), 'peringkat_id', 'peringkat_id'),
        'options' => ['placeholder' => 'Choose Peringkat'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]); ?>

    <?= $form->field($model, 'tahunmeraihprestasi')->textInput(['maxlength' => true, 'placeholder' => 'Tahunmeraihprestasi']) ?>

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
