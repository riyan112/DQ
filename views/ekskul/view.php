<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Ekskul */

$this->title = $model->ekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Ekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekskul-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Ekskul'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->ekskul_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->ekskul_id], [
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
        'ekskul_id',
        [
            'attribute' => 'siswa.siswa_id',
            'label' => 'Siswa',
        ],
        [
            'attribute' => 'jenisekskul.jenisekskul_id',
            'label' => 'Jenisekskul',
        ],
        'nilai',
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
        'fotosiswa',
    ];
    echo DetailView::widget([
        'model' => $model->siswa,
        'attributes' => $gridColumnSiswa    ]);
    ?>
    <div class="row">
        <h4>Jenisekskul<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenisekskul = [
        'namaekskul',
    ];
    echo DetailView::widget([
        'model' => $model->jenisekskul,
        'attributes' => $gridColumnJenisekskul    ]);
    ?>
    
    <div class="row">
<?php
if($providerJadwalekskul->totalCount){
    $gridColumnJadwalekskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'jadwalekskul_id',
                        'jadwal_masukekskul',
            'jadwal_pulangekskul',
            'batas_awal_masukekskul',
            'batas_akhir_masukekskul',
            'batas_awal_pulangekskul',
            'batas_akhir_pulangekskul',
            'isaktif',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerJadwalekskul,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jadwalekskul']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Jadwalekskul'),
        ],
        'export' => false,
        'columns' => $gridColumnJadwalekskul
    ]);
}
?>

    </div>
</div>
