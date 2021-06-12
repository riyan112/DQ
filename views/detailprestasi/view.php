<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Detailprestasi */

$this->title = $model->detailprestasi_id;
$this->params['breadcrumbs'][] = ['label' => 'Detailprestasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailprestasi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Detailprestasi'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->detailprestasi_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->detailprestasi_id], [
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
        [
            'attribute' => 'siswas.siswa_id',
            'label' => 'Detailprestasi',
        ],
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        [
            'attribute' => 'bidangprestasi.bidangprestasi_id',
            'label' => 'Bidangprestasi',
        ],
        [
            'attribute' => 'tingkatprestasi.tingkatprestasi_id',
            'label' => 'Tingkatprestasi',
        ],
        [
            'attribute' => 'peringkat.peringkat_id',
            'label' => 'Peringkat',
        ],
        'tahunmeraihprestasi',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Bidangprestasi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnBidangprestasi = [
        'namabidangprestasi',
    ];
    echo DetailView::widget([
        'model' => $model->bidangprestasi,
        'attributes' => $gridColumnBidangprestasi    ]);
    ?>
    <div class="row">
        <h4>Tingkatprestasi<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnTingkatprestasi = [
        'keterangantingkatprestasi',
    ];
    echo DetailView::widget([
        'model' => $model->tingkatprestasi,
        'attributes' => $gridColumnTingkatprestasi    ]);
    ?>
    <div class="row">
        <h4>Peringkat<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPeringkat = [
        'keteranganperingkat',
    ];
    echo DetailView::widget([
        'model' => $model->peringkat,
        'attributes' => $gridColumnPeringkat    ]);
    ?>
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
        [
            'attribute' => 'detailprestasi.detailprestasi_id',
            'label' => 'Detailprestasi',
        ],
        'detailbeasiswa_id',
    ];
    echo DetailView::widget([
        'model' => $model->siswa,
        'attributes' => $gridColumnSiswa    ]);
    ?>
    
    <div class="row">
<?php
if($providerSiswa->totalCount){
    $gridColumnSiswa = [
        ['class' => 'yii\grid\SerialColumn'],
                        'nis',
            'nisn',
            'nik',
            'namasiswa',
            'tempatlahir',
            'tanggallahir',
            [
                'attribute' => 'jeniskelamin.jeniskelamin_id',
                'label' => 'Jeniskelamin'
            ],
            [
                'attribute' => 'agama.agama_id',
                'label' => 'Agama'
            ],
            [
                'attribute' => 'sekolah.sekolah_id',
                'label' => 'Sekolah'
            ],
            [
                'attribute' => 'kelas.kelas_id',
                'label' => 'Kelas'
            ],
            [
                'attribute' => 'kelasparalel.kelasparalel_id',
                'label' => 'Kelasparalel'
            ],
            [
                'attribute' => 'statussiswa.statussiswa_id',
                'label' => 'Statussiswa'
            ],
            [
                'attribute' => 'asalsekolah.asalsekolah_id',
                'label' => 'Asalsekolah'
            ],
            [
                'attribute' => 'hobi.hobi_id',
                'label' => 'Hobi'
            ],
            [
                'attribute' => 'citacita.citacita_id',
                'label' => 'Citacita'
            ],
            'jumlahsaudara',
            [
                'attribute' => 'jenisasalsekolah.jenisasalsekolah_id',
                'label' => 'Jenisasalsekolah'
            ],
            [
                'attribute' => 'statusasalsekolah.statusasalsekolah_id',
                'label' => 'Statusasalsekolah'
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
                'label' => 'Jaraklokasisiswa'
            ],
            [
                'attribute' => 'alattransportasi.alattransportasi_id',
                'label' => 'Alattransportasi'
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
                'label' => 'Pendidikanayah'
            ],
            [
                'attribute' => 'pekerjaanayah.pekerjaan_id',
                'label' => 'Pekerjaanayah'
            ],
            'namaibu',
            'nikibu',
            [
                'attribute' => 'pendidikanibu.pendidikan_id',
                'label' => 'Pendidikanibu'
            ],
            [
                'attribute' => 'pekerjaanibu.pekerjaan_id',
                'label' => 'Pekerjaanibu'
            ],
            [
                'attribute' => 'penghasilanortu.penghasilanortu_id',
                'label' => 'Penghasilanortu'
            ],
            'nomorkkskps',
            'nomorpkh',
            'nomorkip',
            'statuspenerimapipbsm',
            'alasanstatuspenerimaapipbsm',
            'periodepenerimaanpipbsm',
                        [
                'attribute' => 'detailbeasiswa.detailbeasiswa_id',
                'label' => 'Detailbeasiswa'
            ],
    ];
    echo Gridview::widget([
        'dataProvider' => $providerSiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-siswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Siswa'),
        ],
        'export' => false,
        'columns' => $gridColumnSiswa
    ]);
}
?>

    </div>
</div>
