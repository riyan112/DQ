<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Periodetracer */

$this->title = $model->periodetracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Periodetracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodetracer-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Periodetracer'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->periodetracer_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->periodetracer_id], [
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
        'periodetracer_id',
        [
            'attribute' => 'jenistracer.jenistracer_id',
            'label' => 'Jenistracer',
        ],
        'keteranganperiodetracer',
        'tahun',
        'isaktifperiode',
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
                'attribute' => 'pertanyaan.pertanyaan_id',
                'label' => 'Pertanyaan'
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
    
    <div class="row">
<?php
if($providerPertanyaan->totalCount){
    $gridColumnPertanyaan = [
        ['class' => 'yii\grid\SerialColumn'],
            'pertanyaan_id',
                        [
                'attribute' => 'jenistracer.jenistracer_id',
                'label' => 'Jenistracer'
            ],
            [
                'attribute' => 'jenispertanyaan.jenispertanyaan_id',
                'label' => 'Jenispertanyaan'
            ],
            'isipertanyaan',
            'nourut',
            'halaman',
            'namahalaman',
            'isaktifpertanyaan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPertanyaan,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pertanyaan']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pertanyaan'),
        ],
        'export' => false,
        'columns' => $gridColumnPertanyaan
    ]);
}
?>

    </div>
</div>
