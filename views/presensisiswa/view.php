<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Presensisiswa */

$this->title = $model->presensisiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Presensisiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="presensisiswa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Presensisiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->presensisiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->presensisiswa_id], [
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
        'presensisiswa_id',
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        [
            'attribute' => 'jadwalpresensisiswa.jadwalpresensisiswa_id',
            'label' => 'Jadwalpresensisiswa',
        ],
        'tgl_presensi',
        'statuskehadiran',
        [
            'attribute' => 'izinsiswa.izinsiswa_id',
            'label' => 'Izinsiswa',
        ],
        'jam_masuk',
        'jam_pulang',
        'lokasi',
        'keterangan',
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
        <h4>Jadwalpresensisiswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJadwalpresensisiswa = [
        'jadwal_masuk',
        'jadwal_pulang',
        'batas_awal_masuk',
        'batas_akhir_masuk',
        'batas_awal_pulang',
        'batas_akhir_pulang',
        'isaktif',
    ];
    echo DetailView::widget([
        'model' => $model->jadwalpresensisiswa,
        'attributes' => $gridColumnJadwalpresensisiswa    ]);
    ?>
    <div class="row">
        <h4>Izinsiswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnIzinsiswa = [
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        'keterangan_izin',
        'tgl_izin',
        'bukti',
    ];
    echo DetailView::widget([
        'model' => $model->izinsiswa,
        'attributes' => $gridColumnIzinsiswa    ]);
    ?>
</div>
