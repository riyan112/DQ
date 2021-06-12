<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispertanyaan */

$this->title = $model->jenispertanyaan_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispertanyaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispertanyaan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenispertanyaan'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenispertanyaan_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenispertanyaan_id], [
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
        'jenispertanyaan_id',
        'keteranganpertanyaan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
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
                'attribute' => 'jenistracer.jenistracer_id',
                'label' => 'Jenistracer'
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
