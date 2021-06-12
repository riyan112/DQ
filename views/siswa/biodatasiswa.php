<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

'Siswa'.$this->title = $model->namasiswa;
//$this->params['breadcrumbs'][] = ['label' => 'Siswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-view">

    <div class="row">
    
        <div class="col-sm-9">
        <?php $fotosiswa = Html::img(Yii::$app->request->baseURL.'/img_fotosiswa/'.$model->fotosiswa,['width' => '200px']);
        echo $fotosiswa; ?>
            <!--<h2><?= 'Siswa'.' '. Html::encode($this->title) ?></h2>-->
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?php //Html::a('Update', ['update', 'id' => $model->siswa_id], ['class' => 'btn btn-primary']) ?>
            <?php //Html::a('Delete', ['delete', 'id' => $model->siswa_id], [
                //'class' => 'btn btn-danger',
                //'data' => [
                //    'confirm' => 'Are you sure you want to delete this item?',
                //    'method' => 'post',
                //],
           // ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        /*[
            'attribute' => 'detailprestasi.detailprestasi_id',
            'label' => 'Siswa',
        ],*/
        'namasiswa',
        'nis',
        'nisn',
        'nik',
        'tempatlahir',
        'tanggallahir',
        [
            'attribute' => 'jeniskelamin.namajeniskelamin',
            'label' => 'Jenis Kelamin',
        ],
        [
            'attribute' => 'agama.namaagama',
            'label' => 'Agama',
        ],
        [
            'attribute' => 'sekolah.nama_sekolah',
            'label' => 'Sekolah',
        ],
        [
            'attribute' => 'kelas.namakelas',
            'label' => 'Kelas',
        ],
        [
            'attribute' => 'kelasparalel.namakelasparalel',
            'label' => 'Kelas Paralel',
        ],
        [
            'attribute' => 'statussiswa.namastatussiswa',
            'label' => 'Status Siswa',
        ],
        [
            'attribute' => 'asalsekolah.namaasalsekolah',
            'label' => 'Asal Sekolah',
        ],
        [
            'attribute' => 'hobi.namahobi',
            'label' => 'Hobi',
        ],
        [
            'attribute' => 'citacita.namacitacita',
            'label' => 'Cita-cita',
        ],
        'jumlahsaudara',
        [
            'attribute' => 'jenisasalsekolah.namaasalsekolah',
            'label' => 'Jenis Asal Sekolah',
        ],
        [
            'attribute' => 'statusasalsekolah.namastatusasalsekolah',
            'label' => 'Status Asal Sekolah',
        ],
        'kabupatenkotaasalsekolahasal',
        'alamat',
        'propinsi',
        'kabupaten',
        'kecamatan',
        'desakelurahan',
        'kodepos',
        [
            'attribute' => 'jaraklokasisiswa.namajaraklokasisiswa',
            'label' => 'Jarak Lokasi Siswa',
        ],
        [
            'attribute' => 'alattransportasi.namaalattransportasi',
            'label' => 'Alat Transportasi',
        ],
        /*'tunarungu',
        'tunanetra',
        'tunadaksa',
        'tunagrahita',
        'tunalaras',
        'lambanbelajar',
        'sulitbelajar',
        'gangguankomunikasi',
        'bakatluarbiasa',*/
        'nomorkartukeluarga',
        'namaayah',
        'nikayah',
        [
            'attribute' => 'pendidikanayah.namapendidikan',
            'label' => 'Pendidikan Ayah',
        ],
        [
            'attribute' => 'pekerjaanayah.namapekerjaan',
            'label' => 'Pekerjaan Ayah',
        ],
        'namaibu',
        'nikibu',
        [
            'attribute' => 'pendidikanibu.namapendidikan',
            'label' => 'Pendidikan Ibu',
        ],
        [
            'attribute' => 'pekerjaanibu.namapekerjaan',
            'label' => 'Pekerjaan Ibu',
        ],
        [
            'attribute' => 'penghasilanortu.keteranganpenghasilanortu',
            'label' => 'Penghasilan Orang Tua',
        ],
        /*'nomorkkskps',
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
        ],*/
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
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