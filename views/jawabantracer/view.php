<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jawabantracer */

$this->title = $model->jawaban_id;
$this->params['breadcrumbs'][] = ['label' => 'Jawabantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jawabantracer-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jawabantracer'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jawaban_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jawaban_id], [
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
        'jawaban_id',
        [
            'attribute' => 'pertanyaan.pertanyaan_id',
            'label' => 'Pertanyaan',
        ],
        [
            'attribute' => 'jenisjawaban.jenisjawaban_id',
            'label' => 'Jenisjawaban',
        ],
        'isijawaban',
        'nourut',
        'bobot',
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
                'attribute' => 'pertanyaan.pertanyaan_id',
                'label' => 'Pertanyaan'
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
        <h4>Jenisjawaban<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJenisjawaban = [
        'keteranganjawaban',
    ];
    echo DetailView::widget([
        'model' => $model->jenisjawaban,
        'attributes' => $gridColumnJenisjawaban    ]);
    ?>
    <div class="row">
        <h4>Pertanyaan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPertanyaan = [
        'periodetracer_id',
        'jenistracer_id',
        'jenispertanyaan_id',
        'isipertanyaan',
        'nourut',
        'halaman',
        'namahalaman',
        'isaktifpertanyaan',
    ];
    echo DetailView::widget([
        'model' => $model->pertanyaan,
        'attributes' => $gridColumnPertanyaan    ]);
    ?>
</div>
