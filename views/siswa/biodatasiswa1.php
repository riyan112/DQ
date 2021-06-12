<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = $model->siswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-view">

    <div class="row">
        <div class="col-sm-9">
        
        <?php $fotosiswa = Html::img(Yii::$app->request->baseURL.'/img_fotosiswa/'.$model->fotosiswa,['width' => '400px']);
        echo $fotosiswa;
        ?>
            <h2><?= 'Siswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->siswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->siswa_id], [
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
        /*[
            'attribute' => 'detailprestasis.detailprestasi_id',
            'label' => 'Siswa',
        ],*/
        
        'namasiswa',
        'nis',
        'nisn',
        'nik',
        'tempatlahir',
        'tanggallahir',
        [
            'attribute' => 'jeniskelamin.jeniskelamin_id',
            'label' => 'Jeniskelamin',
        ],
        [
            'attribute' => 'agama.agama_id',
            'label' => 'Agama',
        ],
        [
            'attribute' => 'sekolah.sekolah_id',
            'label' => 'Sekolah',
        ],
        [
            'attribute' => 'kelas.kelas_id',
            'label' => 'Kelas',
        ],
        [
            'attribute' => 'kelasparalel.kelasparalel_id',
            'label' => 'Kelasparalel',
        ],
        [
            'attribute' => 'statussiswa.statussiswa_id',
            'label' => 'Statussiswa',
        ],
        [
            'attribute' => 'asalsekolah.asalsekolah_id',
            'label' => 'Asalsekolah',
        ],
        [
            'attribute' => 'hobi.hobi_id',
            'label' => 'Hobi',
        ],
        [
            'attribute' => 'citacita.citacita_id',
            'label' => 'Citacita',
        ],
        'jumlahsaudara',
        [
            'attribute' => 'jenisasalsekolah.jenisasalsekolah_id',
            'label' => 'Jenisasalsekolah',
        ],
        [
            'attribute' => 'statusasalsekolah.statusasalsekolah_id',
            'label' => 'Statusasalsekolah',
        ],
        'kabupatenkotaasalsekolahasal',
        'alamat',
        'propinsi',
        'kabupaten',
        'kecamatan',
        'desakelurahan',
        'kodepos',
        [
            'attribute' => 'jaraklokasisiswa.jaraklokasisiswa_id',
            'label' => 'Jaraklokasisiswa',
        ],
        [
            'attribute' => 'alattransportasi.alattransportasi_id',
            'label' => 'Alattransportasi',
        ],
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
        [
            'attribute' => 'pendidikanayah.pendidikan_id',
            'label' => 'Pendidikanayah',
        ],
        [
            'attribute' => 'pekerjaanayah.pekerjaan_id',
            'label' => 'Pekerjaanayah',
        ],
        'namaibu',
        'nikibu',
        [
            'attribute' => 'pendidikanibu.pendidikan_id',
            'label' => 'Pendidikanibu',
        ],
        [
            'attribute' => 'pekerjaanibu.pekerjaan_id',
            'label' => 'Pekerjaanibu',
        ],
        [
            'attribute' => 'penghasilanortu.penghasilanortu_id',
            'label' => 'Penghasilanortu',
        ],
        'nomorkkskps',
        'nomorpkh',
        'nomorkip',
        'statuspenerimapipbsm',
        'alasanstatuspenerimaapipbsm',
        'periodepenerimaanpipbsm',
        [
            'attribute' => 'detailprestasi.detailprestasi_id',
            'label' => 'Detailprestasi',
        ],
        [
            'attribute' => 'detailbeasiswa.detailbeasiswa_id',
            'label' => 'Detailbeasiswa',
        ],
        'fotosiswa',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php /*
if($providerAlumni->totalCount){
    $gridColumnAlumni = [
        ['class' => 'yii\grid\SerialColumn'],
            'alumni_id',
                        'nis',
            'nisn',
            'nik',
            'namasiswa',
            'tanggalproses',
            'isproses',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerAlumni,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-alumni']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Alumni'),
        ],
        'export' => false,
        'columns' => $gridColumnAlumni
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerDetailprestasi->totalCount){
    $gridColumnDetailprestasi = [
        ['class' => 'yii\grid\SerialColumn'],
                                    [
                'attribute' => 'bidangprestasi.bidangprestasi_id',
                'label' => 'Bidangprestasi'
            ],
            [
                'attribute' => 'tingkatprestasi.tingkatprestasi_id',
                'label' => 'Tingkatprestasi'
            ],
            [
                'attribute' => 'peringkat.peringkat_id',
                'label' => 'Peringkat'
            ],
            'tahunmeraihprestasi',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDetailprestasi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailprestasi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Detailprestasi'),
        ],
        'export' => false,
        'columns' => $gridColumnDetailprestasi
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerEkskul->totalCount){
    $gridColumnEkskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'ekskul_id',
                        [
                'attribute' => 'jenisekskul.jenisekskul_id',
                'label' => 'Jenisekskul'
            ],
            'nilai',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerEkskul,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-ekskul']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Ekskul'),
        ],
        'export' => false,
        'columns' => $gridColumnEkskul
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerHasilkaryasiswa->totalCount){
    $gridColumnHasilkaryasiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'hasilkaryasiswa_id',
                        [
                'attribute' => 'jeniskaryasiswa.jeniskaryasiswa_id',
                'label' => 'Jeniskaryasiswa'
            ],
            'judulkaryasiswa',
            'keterangankaryasiswa',
            'tgluploadkaryasiswa',
            'portofolio',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerHasilkaryasiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-hasilkaryasiswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Hasilkaryasiswa'),
        ],
        'export' => false,
        'columns' => $gridColumnHasilkaryasiswa
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerIzinekskul->totalCount){
    $gridColumnIzinekskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'izinekskul_id',
                        'keteranganizinekskul',
            'tgl_izinekskul',
            'buktiizinekskul',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzinekskul,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-izinekskul']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Izinekskul'),
        ],
        'export' => false,
        'columns' => $gridColumnIzinekskul
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerIzinsiswa->totalCount){
    $gridColumnIzinsiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'izinsiswa_id',
                        'keterangan_izin',
            'tgl_izin',
            'bukti',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzinsiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-izinsiswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Izinsiswa'),
        ],
        'export' => false,
        'columns' => $gridColumnIzinsiswa
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerMutasi->totalCount){
    $gridColumnMutasi = [
        ['class' => 'yii\grid\SerialColumn'],
            'mutasi_id',
                        'tgl_mutasi',
            'keteranganmutasi',
            'isapproval',
            'tgl_approval',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerMutasi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-mutasi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Mutasi'),
        ],
        'export' => false,
        'columns' => $gridColumnMutasi
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPelanggaran->totalCount){
    $gridColumnPelanggaran = [
        ['class' => 'yii\grid\SerialColumn'],
            'pelanggaran_id',
                        'pegawai_id',
            [
                'attribute' => 'jenispelanggaran.jenispelanggaran_id',
                'label' => 'Jenispelanggaran'
            ],
            [
                'attribute' => 'jeniskonseling.jeniskonseling_id',
                'label' => 'Jeniskonseling'
            ],
            'keteranganpelanggaran',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPelanggaran,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pelanggaran']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pelanggaran'),
        ],
        'export' => false,
        'columns' => $gridColumnPelanggaran
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPresensiekskul->totalCount){
    $gridColumnPresensiekskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensiekskul_id',
                        [
                'attribute' => 'jadwalekskul.jadwalekskul_id',
                'label' => 'Jadwalekskul'
            ],
            'tgl_presensiekskkul',
            'statuskehadiranekskul',
            [
                'attribute' => 'izinekskul.izinekskul_id',
                'label' => 'Izinekskul'
            ],
            'jam_masukekskul',
            'jam_pulangekskul',
            'lokasi',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPresensiekskul,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensiekskul']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Presensiekskul'),
        ],
        'export' => false,
        'columns' => $gridColumnPresensiekskul
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPresensisiswa->totalCount){
    $gridColumnPresensisiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensisiswa_id',
                        [
                'attribute' => 'jadwalpresensisiswa.jadwalpresensisiswa_id',
                'label' => 'Jadwalpresensisiswa'
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
    <div class="row">
        <h4>Jeniskelamin<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJeniskelamin = [
        'namajeniskelamin',
    ];
    echo DetailView::widget([
        'model' => $model->jeniskelamin,
        'attributes' => $gridColumnJeniskelamin    ]);
    ?>
    <div class="row">
        <h4>Statusasalsekolah<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnStatusasalsekolah = [
        'namastatusasalsekolah',
    ];
    echo DetailView::widget([
        'model' => $model->statusasalsekolah,
        'attributes' => $gridColumnStatusasalsekolah    ]);
    ?>
    <div class="row">
        <h4>Jaraklokasisiswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJaraklokasisiswa = [
        'namajaraklokasisiswa',
    ];
    echo DetailView::widget([
        'model' => $model->jaraklokasisiswa,
        'attributes' => $gridColumnJaraklokasisiswa    ]);
    ?>
    <div class="row">
        <h4>Alattransportasi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnAlattransportasi = [
        'namaalattransportasi',
    ];
    echo DetailView::widget([
        'model' => $model->alattransportasi,
        'attributes' => $gridColumnAlattransportasi    ]);
    ?>
    <div class="row">
        <h4>Pendidikan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPendidikan = [
        'pendidikan_id',
        'namapendidikan',
    ];
    echo DetailView::widget([
        'model' => $model->pendidikanayah,
        'attributes' => $gridColumnPendidikan    ]);
    ?>
    <div class="row">
        <h4>Pekerjaan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPekerjaan = [
        'pekerjaan_id',
        'namapekerjaan',
    ];
    echo DetailView::widget([
        'model' => $model->pekerjaanayah,
        'attributes' => $gridColumnPekerjaan    ]);
    ?>
    <div class="row">
        <h4>Pendidikan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPendidikan = [
        'pendidikan_id',
        'namapendidikan',
    ];
    echo DetailView::widget([
        'model' => $model->pendidikanibu,
        'attributes' => $gridColumnPendidikan    ]);
    ?>
    <div class="row">
        <h4>Pekerjaan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPekerjaan = [
        'pekerjaan_id',
        'namapekerjaan',
    ];
    echo DetailView::widget([
        'model' => $model->pekerjaanibu,
        'attributes' => $gridColumnPekerjaan    ]);
    ?>
    <div class="row">
        <h4>Penghasilanortu<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPenghasilanortu = [
        'keteranganpenghasilanortu',
    ];
    echo DetailView::widget([
        'model' => $model->penghasilanortu,
        'attributes' => $gridColumnPenghasilanortu    ]);
    ?>
    <div class="row">
        <h4>Detailprestasi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnDetailprestasi = [
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        'bidangprestasi_id',
        'tingkatprestasi_id',
        'peringkat_id',
        'tahunmeraihprestasi',
    ];
    echo DetailView::widget([
        'model' => $model->detailprestasi,
        'attributes' => $gridColumnDetailprestasi    ]);
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
        <h4>Agama<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnAgama = [
        'namaagama',
    ];
    echo DetailView::widget([
        'model' => $model->agama,
        'attributes' => $gridColumnAgama    ]);
    ?>
    <div class="row">
        <h4>Detailbeasiswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnDetailbeasiswa = [
        'jenisbeasiswa_id',
        'sumberbeasiswa_id',
        'jangkawaktu',
        'nominalditerima',
    ];
    echo DetailView::widget([
        'model' => $model->detailbeasiswa,
        'attributes' => $gridColumnDetailbeasiswa    ]);
    ?>
    <div class="row">
        <h4>Kelas<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnKelas = [
        'namakelas',
    ];
    echo DetailView::widget([
        'model' => $model->kelas,
        'attributes' => $gridColumnKelas    ]);
    ?>
    <div class="row">
        <h4>Kelasparalel<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnKelasparalel = [
        'namakelasparalel',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model->kelasparalel,
        'attributes' => $gridColumnKelasparalel    ]);
    ?>
    <div class="row">
        <h4>Statussiswa<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnStatussiswa = [
        'namastatussiswa',
    ];
    echo DetailView::widget([
        'model' => $model->statussiswa,
        'attributes' => $gridColumnStatussiswa    ]);
    ?>
    <div class="row">
        <h4>Asalsekolah<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnAsalsekolah = [
        'namaasalsekolah',
    ];
    echo DetailView::widget([
        'model' => $model->asalsekolah,
        'attributes' => $gridColumnAsalsekolah    ]);
    ?>
    <div class="row">
        <h4>Hobi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnHobi = [
        'namahobi',
    ];
    echo DetailView::widget([
        'model' => $model->hobi,
        'attributes' => $gridColumnHobi    ]);
    ?>
    <div class="row">
        <h4>Citacita<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnCitacita = [
        'namacitacita',
    ];
    echo DetailView::widget([
        'model' => $model->citacita,
        'attributes' => $gridColumnCitacita    ]);
    ?>
    <div class="row">
        <h4>Jenisasalsekolah<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenisasalsekolah = [
        'namaasalsekolah',
    ];
    echo DetailView::widget([
        'model' => $model->jenisasalsekolah,
        'attributes' => $gridColumnJenisasalsekolah    ])*/;
    ?>
</div>
