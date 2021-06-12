<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenistracer */

$this->title = $model->jenistracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenistracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenistracer-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenistracer'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenistracer_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenistracer_id], [
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
        'jenistracer_id',
        'namajenistracer',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPeriodetracer->totalCount){
    $gridColumnPeriodetracer = [
        ['class' => 'yii\grid\SerialColumn'],
            'periodetracer_id',
                        'keteranganperiodetracer',
            'tahun',
            'isaktifperiode',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPeriodetracer,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-periodetracer']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Periodetracer'),
        ],
        'export' => false,
        'columns' => $gridColumnPeriodetracer
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerPertanyaan->totalCount){
    $gridColumnPertanyaan = [
        ['class' => 'yii\grid\SerialColumn'],
            'pertanyaan_id',
            [
                'attribute' => 'periodetracer.periodetracer_id',
                'label' => 'Periodetracer'
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
