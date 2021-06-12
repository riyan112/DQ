<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalpresensisiswa */

$this->title = $model->jadwalpresensisiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalpresensisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalpresensisiswa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jadwalpresensisiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jadwalpresensisiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jadwalpresensisiswa_id], [
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
<?php 
    $gridColumn = [
        'jadwalpresensisiswa_id',
        'jadwal_masuk',
        'jadwal_pulang',
        'batas_awal_masuk',
        'batas_akhir_masuk',
        'batas_awal_pulang',
        'batas_akhir_pulang',
        'isaktif',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPresensisiswa->totalCount){
    $gridColumnPresensisiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensisiswa_id',
            [
                'attribute' => 'siswa.siswa_id',
                'label' => 'Siswa'
            ],
                        'tgl_presensi',
            'statuskehadiran',
            [
                'attribute' => 'izinsiswa.izinsiswa_id',
                'label' => 'Izinsiswa'
            ],
            'jam_masuk',
            'jam_pulang',
            'lokasi',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPresensisiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensisiswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Presensisiswa'),
        ],
        'export' => false,
        'columns' => $gridColumnPresensisiswa
    ]);
}
?>

    </div>
</div>
