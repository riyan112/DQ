<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'AuthAssignment', 
        'relID' => 'auth-assignment', 
        'value' => \yii\helpers\Json::encode($model->authAssignments),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos'=> \yii\web\View::POS_END, 
    'viewParams' => [
        'class' => 'UserVisitLog', 
        'relID' => 'user-visit-log', 
        'value' => \yii\helpers\Json::encode($model->userVisitLogs),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Username']) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true, 'placeholder' => 'Auth Key']) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true, 'placeholder' => 'Password Hash']) ?>

    <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true, 'placeholder' => 'Confirmation Token']) ?>

    <?= $form->field($model, 'status')->textInput(['placeholder' => 'Status']) ?>

    <?= $form->field($model, 'superadmin')->textInput(['placeholder' => 'Superadmin']) ?>

    <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true, 'placeholder' => 'Registration Ip']) ?>

    <?= $form->field($model, 'bind_to_ip')->textInput(['maxlength' => true, 'placeholder' => 'Bind To Ip']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email']) ?>

    <?= $form->field($model, 'email_confirmed')->textInput(['placeholder' => 'Email Confirmed']) ?>

    <?php
    $forms = [
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('AuthAssignment'),
            'content' => $this->render('_formAuthAssignment', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->authAssignments),
            ]),
        ],
        [
            'label' => '<i class="glyphicon glyphicon-book"></i> ' . Html::encode('UserVisitLog'),
            'content' => $this->render('_formUserVisitLog', [
                'row' => \yii\helpers\ArrayHelper::toArray($model->userVisitLogs),
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
