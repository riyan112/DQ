<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pendidikan */

$this->title = $model->pendidikan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pendidikan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pendidikan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pendidikan_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pendidikan_id], [
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
        'pendidikan_id',
        'namapendidikan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerSiswa->totalCount){
    $gridColumnSiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'siswa_id',
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
                'attribute' => 'pekerjaanayah.pekerjaan_id',
                'label' => 'Pekerjaanayah'
            ],
            'namaibu',
            'nikibu',
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
                'attribute' => 'detailprestasi.detailprestasi_id',
                'label' => 'Detailprestasi'
            ],
            'detailbeasiswa_id',
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
