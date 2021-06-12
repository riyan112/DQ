<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Peringkat */

$this->title = $model->peringkat_id;
$this->params['breadcrumbs'][] = ['label' => 'Peringkat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peringkat-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Peringkat'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->peringkat_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->peringkat_id], [
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
        'peringkat_id',
        'keteranganperingkat',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerDetailprestasi->totalCount){
    $gridColumnDetailprestasi = [
        ['class' => 'yii\grid\SerialColumn'],
            'detailprestasi_id',
            'siswa_id',
            [
                'attribute' => 'bidangprestasi.bidangprestasi_id',
                'label' => 'Bidangprestasi'
            ],
            [
                'attribute' => 'tingkatprestasi.tingkatprestasi_id',
                'label' => 'Tingkatprestasi'
            ],
                        'tahunmeraihprestasi',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDetailprestasi,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailprestasi']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Detailprestasi'),
        ],
        'export' => false,
        'columns' => $gridColumnDetailprestasi
    ]);
}
?>

    </div>
</div>
