<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Filesiswa */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="filesiswa-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'namafilesiswa')->fileInput()->label('Nama File Siswa', ['class' => 'create']) ?>
<small>file yang dapat diupload bertype .xlsx</small><br><br>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>


</div>
