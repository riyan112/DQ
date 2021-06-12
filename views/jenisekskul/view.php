<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisekskul */

$this->title = $model->jenisekskul_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisekskul', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisekskul-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenisekskul'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenisekskul_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenisekskul_id], [
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
        'jenisekskul_id',
        'namaekskul',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerEkskul->totalCount){
    $gridColumnEkskul = [
        ['class' => 'yii\grid\SerialColumn'],
            'ekskul_id',
            [
                'attribute' => 'siswa.siswa_id',
                'label' => 'Siswa'
            ],
                        'nilai',
            'keterangan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerEkskul,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-ekskul']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Ekskul'),
        ],
        'export' => false,
        'columns' => $gridColumnEkskul
    ]);
}
?>

    </div>
</div>
