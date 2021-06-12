<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenjang */

$this->title = $model->jenjang_sekolah_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenjang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenjang-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenjang'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenjang_sekolah_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenjang_sekolah_id], [
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
        'jenjang_sekolah_id',
        'nama_jenjang',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerSekolah->totalCount){
    $gridColumnSekolah = [
        ['class' => 'yii\grid\SerialColumn'],
            'sekolah_id',
                        'nsm',
            'npsn',
            'nama_sekolah',
            'alamat_sekolah',
            'kelurahan',
            'kecamatan',
            'kabupaten',
            'provinsi',
            'kode_pos',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerSekolah,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-sekolah']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Sekolah'),
        ],
        'export' => false,
        'columns' => $gridColumnSekolah
    ]);
}
?>

    </div>
</div>
