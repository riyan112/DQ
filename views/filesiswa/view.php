<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Filesiswa */

$this->title = $model->filesiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Filesiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filesiswa-view">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <h2><?= 'Filesiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3 col-sm-offset-1" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->filesiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->filesiswa_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
    <div class= "col-md-10 col-md-offset-1">
<?php 
    $gridColumn = [
        'filesiswa_id',
        'namafilesiswa',
        'ukuran',
        'tgl_upload',
        'tgl_proses',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
    //var_dump($model['tgl_proses']);
    //die();
?>

<?=  Html::a('Proses', ['import', 'id' => $model->filesiswa_id], ['class' => 'btn btn-primary', 'onclick' => "return confirm('Tekan ok, untuk mengimpor data excel')"]) ?>

        <?php if ($model['tgl_proses'] == null) { ?>
            <?=  Html::a('Proses', ['import', 'id' => $model->filesiswa_id], ['class' => 'btn btn-primary', 'onclick' => "return confirm('Tekan ok, untuk mengimpor data excel')"]) ?>
        <?php } else {
        } ?>

    </div>
</div>
</div>