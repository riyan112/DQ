<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Izinekskul */

$this->title = $model->izinekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Izinekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izinekskul-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Izinekskul'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->izinekskul_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->izinekskul_id], [
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
        'izinekskul_id',
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        'keteranganizinekskul',
        'tgl_izinekskul',
        'buktiizinekskul',
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
        'fotosiswa',
    ];
    echo DetailView::widget([
        'model' => $model->siswa,
        'attributes' => $gridColumnSiswa    ]);
    ?>
    
    <div class="row">
<?php
if($providerPresensiekskul->totalCount){
    $gridColumnPresensiekskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'presensiekskul_id',
            [
                'attribute' => 'siswa.siswa_id',
                'label' => 'Siswa'
            ],
            [
                'attribute' => 'jadwalekskul.jadwalekskul_id',
                'label' => 'Jadwalekskul'
            ],
            'tgl_presensiekskkul',
            'statuskehadiranekskul',
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
</div>
