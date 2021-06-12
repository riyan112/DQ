<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filezip */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="filezip-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namafilezip')->fileInput()->label('Nama File', ['class' => 'create']) ?>
<small>file yang dapat diupload bertype .zip</small><br><br>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
