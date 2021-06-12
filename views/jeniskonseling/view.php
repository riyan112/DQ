<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskonseling */

$this->title = $model->jeniskonseling_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskonseling', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniskonseling-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jeniskonseling'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jeniskonseling_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jeniskonseling_id], [
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
        'jeniskonseling_id',
        'namakonseling',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerPelanggaran->totalCount){
    $gridColumnPelanggaran = [
        ['class' => 'yii\grid\SerialColumn'],
            'pelanggaran_id',
            [
                'attribute' => 'siswa.siswa_id',
                'label' => 'Siswa'
            ],
            'pegawai_id',
            [
                'attribute' => 'jenispelanggaran.jenispelanggaran_id',
                'label' => 'Jenispelanggaran'
            ],
                        'keteranganpelanggaran',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPelanggaran,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pelanggaran']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Pelanggaran'),
        ],
        'export' => false,
        'columns' => $gridColumnPelanggaran
    ]);
}
?>

    </div>
</div>
