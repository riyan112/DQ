<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pertanyaan */

$this->title = $model->pertanyaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Pertanyaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertanyaan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pertanyaan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pertanyaan_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pertanyaan_id], [
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
        'pertanyaan_id',
        [
            'attribute' => 'periodetracer.periodetracer_id',
            'label' => 'Periodetracer',
        ],
        [
            'attribute' => 'jenistracer.jenistracer_id',
            'label' => 'Jenistracer',
        ],
        [
            'attribute' => 'jenispertanyaan.jenispertanyaan_id',
            'label' => 'Jenispertanyaan',
        ],
        'isipertanyaan',
        'nourut',
        'halaman',
        'namahalaman',
        'isaktifpertanyaan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerDetailpengisiantracer->totalCount){
    $gridColumnDetailpengisiantracer = [
        ['class' => 'yii\grid\SerialColumn'],
            'detailpengisiantracer_id',
            [
                'attribute' => 'pengisiantracer.pengisiantracer_id',
                'label' => 'Pengisiantracer'
            ],
            [
                'attribute' => 'periodetracer.periodetracer_id',
                'label' => 'Periodetracer'
            ],
                        [
                'attribute' => 'jawaban.jawaban_id',
                'label' => 'Jawaban'
            ],
            'jawabanesai',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDetailpengisiantracer,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailpengisiantracer']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Detailpengisiantracer'),
        ],
        'export' => false,
        'columns' => $gridColumnDetailpengisiantracer
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerJawabantracer->totalCount){
    $gridColumnJawabantracer = [
        ['class' => 'yii\grid\SerialColumn'],
            'jawaban_id',
                        [
                'attribute' => 'jenisjawaban.jenisjawaban_id',
                'label' => 'Jenisjawaban'
            ],
            'isijawaban',
            'nourut',
            'bobot',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerJawabantracer,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jawabantracer']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Jawabantracer'),
        ],
        'export' => false,
        'columns' => $gridColumnJawabantracer
    ]);
}
?>

    </div>
    <div class="row">
        <h4>Jenispertanyaan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenispertanyaan = [
        'keteranganpertanyaan',
    ];
    echo DetailView::widget([
        'model' => $model->jenispertanyaan,
        'attributes' => $gridColumnJenispertanyaan    ]);
    ?>
    <div class="row">
        <h4>Periodetracer<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPeriodetracer = [
        [
            'attribute' => 'jenistracer.jenistracer_id',
            'label' => 'Jenistracer',
        ],
        'keteranganperiodetracer',
        'tahun',
        'isaktifperiode',
    ];
    echo DetailView::widget([
        'model' => $model->periodetracer,
        'attributes' => $gridColumnPeriodetracer    ]);
    ?>
    <div class="row">
        <h4>Jenistracer<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenistracer = [
        'namajenistracer',
    ];
    echo DetailView::widget([
        'model' => $model->jenistracer,
        'attributes' => $gridColumnJenistracer    ]);
    ?>
</div>
