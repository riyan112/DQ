<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenispelanggaran */

$this->title = $model->jenispelanggaran_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenispelanggaran', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenispelanggaran-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenispelanggaran'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenispelanggaran_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenispelanggaran_id], [
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
        'jenispelanggaran_id',
        'namapelanggran',
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
                'attribute' => 'jeniskonseling.jeniskonseling_id',
                'label' => 'Jeniskonseling'
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
