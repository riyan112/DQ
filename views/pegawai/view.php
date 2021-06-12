<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pegawai */

$this->title = $model->pegawai_id;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pegawai'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pegawai_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pegawai_id], [
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
        'pegawai_id',
        'nip',
        'nama_pegawai',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'status_kawin',
        'nama_pasangan',
        [
            'attribute' => 'sekolah.sekolah_id',
            'label' => 'Sekolah',
        ],
        'tmt',
        [
            'attribute' => 'statuspegawai.statuspegawai',
            'label' => 'Statuspegawai',
        ],
        [
            'attribute' => 'pangkatgolongan.pangkatgolongan_id',
            'label' => 'Pangkatgolongan',
        ],
        'pendidikan_id',
        'jurusan',
        'nama_sekolah',
        'sertifikasi',
        'status_inpasing',
        [
            'attribute' => 'jenispegawai.jenispegawai_id',
            'label' => 'Jenispegawai',
        ],
        'tugas_tambahan',
        'kaderisasi_nu',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerCuti->totalCount){
    $gridColumnCuti = [
        ['class' => 'yii\grid\SerialColumn'],
            'cuti_id',
                        'keterangan_cuti',
            'tgl',
            [
                'attribute' => 'statuspengajuan.statuspengajuan_id',
                'label' => 'Statuspengajuan'
            ],
            'bukti',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerCuti,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-cuti']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Cuti'),
        ],
        'export' => false,
        'columns' => $gridColumnCuti
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerIzin->totalCount){
    $gridColumnIzin = [
        ['class' => 'yii\grid\SerialColumn'],
            'izin_id',
                        'keterangan_izin',
            'tgl',
            'bukti',
            [
                'attribute' => 'statuspengajuan.statuspengajuan_id',
                'label' => 'Statuspengajuan'
            ],
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzin,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-izin']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Izin'),
        ],
        'export' => false,
        'columns' => $gridColumnIzin
    ]);
}
?>

    </div>
    <div class="row">
        <h4>Pangkatgolongan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPangkatgolongan = [
        'nama_pangkatgolongan',
    ];
    echo DetailView::widget([
        'model' => $model->pangkatgolongan,
        'attributes' => $gridColumnPangkatgolongan    ]);
    ?>
    <div class="row">
        <h4>Statuspegawai<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnStatuspegawai = [
        'statuspegawai',
    ];
    echo DetailView::widget([
        'model' => $model->statuspegawai,
        'attributes' => $gridColumnStatuspegawai    ]);
    ?>
    <div class="row">
        <h4>Jenispegawai<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenispegawai = [
        'nama_jenispegawai',
    ];
    echo DetailView::widget([
        'model' => $model->jenispegawai,
        'attributes' => $gridColumnJenispegawai    ]);
    ?>
    <div class="row">
        <h4>Sekolah<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnSekolah = [
        'jenjang_sekolah_id',
        'nsm',
        'npsn',
        'nama_sekolah',
        'alamat_sekolah',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
    ];
    echo DetailView::widget([
        'model' => $model->sekolah,
        'attributes' => $gridColumnSekolah    ]);
    ?>
    
    <div class="row">
<?php
if($providerPendidikanPegawai->totalCount){
    $gridColumnPendidikanPegawai = [
        ['class' => 'yii\grid\SerialColumn'],
            'pendidikan_id',
                        'ket_pendidikan',
            'jenjang',
            'is_aktif',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPendidikanPegawai,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pendidikan-pegawai']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pendidikan Pegawai'),
        ],
        'export' => false,
        'columns' => $gridColumnPendidikanPegawai
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPresensi->totalCount){
    $gridColumnPresensi = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensi_id',
                        [
                'attribute' => 'jadwalpresensi.jadwalpresensi_id',
                'label' => 'Jadwalpresensi'
            ],
            'tgl',
            'status_kehadiran',
            [
                'attribute' => 'cuti.cuti_id',
                'label' => 'Cuti'
            ],
            [
                'attribute' => 'izin.izin_id',
                'label' => 'Izin'
            ],
            'jam_masuk',
            'jam_pulang',
            'lokasi',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPresensi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Presensi'),
        ],
        'export' => false,
        'columns' => $gridColumnPresensi
    ]);
}
?>

    </div>
</div>
