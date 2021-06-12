<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengisiantracer */

$this->title = $model->pengisiantracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Pengisiantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengisiantracer-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Pengisiantracer'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->pengisiantracer_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->pengisiantracer_id], [
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
        'pengisiantracer_id',
        [
            'attribute' => 'alumni.alumni_id',
            'label' => 'Alumni',
        ],
        'saran',
        'keterangan',
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
                'attribute' => 'periodetracer.periodetracer_id',
                'label' => 'Periodetracer'
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
        <h4>Alumni<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnAlumni = [
        'siswa_id',
        'nis',
        'nisn',
        'nik',
        'namasiswa',
        'tanggalproses',
        'isproses',
    ];
    echo DetailView::widget([
        'model' => $model->alumni,
        'attributes' => $gridColumnAlumni    ]);
    ?>
</div>
