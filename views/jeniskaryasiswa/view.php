<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jeniskaryasiswa */

$this->title = $model->jeniskaryasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Jeniskaryasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jeniskaryasiswa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jeniskaryasiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jeniskaryasiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jeniskaryasiswa_id], [
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
        'jeniskaryasiswa_id',
        'namajeniskaryasiswa',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerHasilkaryasiswa->totalCount){
    $gridColumnHasilkaryasiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'hasilkaryasiswa_id',
            [
                'attribute' => 'siswa.siswa_id',
                'label' => 'Siswa'
            ],
                        'judulkaryasiswa',
            'keterangankaryasiswa',
            'tgluploadkaryasiswa',
            'portofolio',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerHasilkaryasiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-hasilkaryasiswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Hasilkaryasiswa'),
        ],
        'export' => false,
        'columns' => $gridColumnHasilkaryasiswa
    ]);
}
?>

    </div>
</div>
