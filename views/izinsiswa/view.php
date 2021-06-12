<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinsiswa */

$this->title = $model->izinsiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Izinsiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinsiswa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Izinsiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->izinsiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->izinsiswa_id], [
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
        'izinsiswa_id',
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        'keterangan_izin',
        'tgl_izin',
        'bukti',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Siswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnSiswa = [
        'nis',
        'nisn',
        'nik',
        'namasiswa',
        'tempatlahir',
        'tanggallahir',
        'jeniskelamin_id',
        'agama_id',
        'sekolah_id',
        'kelas_id',
        'kelasparalel_id',
        'statussiswa_id',
        'asalsekolah_id',
        'hobi_id',
        'citacita_id',
        'jumlahsaudara',
        'jenisasalsekolah_id',
        'statusasalsekolah_id',
        'kabupatenkotaasalsekolahasal',
        'alamat',
        'propinsi',
        'kabupaten',
        'kecamatan',
        'desakelurahan',
        'kodepos',
        'jaraklokasisiswa_id',
        'alattransportasi_id',
        'tunarungu',
        'tunanetra',
        'tunadaksa',
        'tunagrahita',
        'tunalaras',
        'lambanbelajar',
        'sulitbelajar',
        'gangguankomunikasi',
        'bakatluarbiasa',
        'nomorkartukeluarga',
        'namaayah',
        'nikayah',
        'pendidikanayah_id',
        'pekerjaanayah_id',
        'namaibu',
        'nikibu',
        'pendidikanibu_id',
        'pekerjaanibu_id',
        'penghasilanortu_id',
        'nomorkkskps',
        'nomorpkh',
        'nomorkip',
        'statuspenerimapipbsm',
        'alasanstatuspenerimaapipbsm',
        'periodepenerimaanpipbsm',
        'detailprestasi_id',
        'detailbeasiswa_id',
    ];
    echo DetailView::widget([
        'model' => $model->siswa,
        'attributes' => $gridColumnSiswa    ]);
    ?>
    
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
            [
                'attribute' => 'jadwalpresensisiswa.jadwalpresensisiswa_id',
                'label' => 'Jadwalpresensisiswa'
            ],
            'tgl_presensi',
            'statuskehadiran',
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
