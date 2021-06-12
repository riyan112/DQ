<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true, 'placeholder' => 'Username']) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true, 'placeholder' => 'Auth Key']) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true, 'placeholder' => 'Password Hash']) ?>

    <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true, 'placeholder' => 'Confirmation Token']) ?>

    <?php /* echo $form->field($model, 'status')->textInput(['placeholder' => 'Status']) */ ?>

    <?php /* echo $form->field($model, 'superadmin')->textInput(['placeholder' => 'Superadmin']) */ ?>

    <?php /* echo $form->field($model, 'registration_ip')->textInput(['maxlength' => true, 'placeholder' => 'Registration Ip']) */ ?>

    <?php /* echo $form->field($model, 'bind_to_ip')->textInput(['maxlength' => true, 'placeholder' => 'Bind To Ip']) */ ?>

    <?php /* echo $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'Email']) */ ?>

    <?php /* echo $form->field($model, 'email_confirmed')->textInput(['placeholder' => 'Email Confirmed']) */ ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
