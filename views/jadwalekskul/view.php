<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwalekskul */

$this->title = $model->jadwalekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwalekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwalekskul-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jadwalekskul'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jadwalekskul_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jadwalekskul_id], [
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
        'jadwalekskul_id',
        [
            'attribute' => 'ekskul.ekskul_id',
            'label' => 'Ekskul',
        ],
        'jadwal_masukekskul',
        'jadwal_pulangekskul',
        'batas_awal_masukekskul',
        'batas_akhir_masukekskul',
        'batas_awal_pulangekskul',
        'batas_akhir_pulangekskul',
        'isaktif',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Ekskul<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnEkskul = [
        'siswa_id',
        'jenisekskul_id',
        'nilai',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model->ekskul,
        'attributes' => $gridColumnEkskul    ]);
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
</div>
