<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Sumberbeasiswa */

$this->title = $model->sumberbeasiswa_id;
$this->params['breadcrumbs'][] = ['label' => 'Sumberbeasiswa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sumberbeasiswa-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Sumberbeasiswa'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->sumberbeasiswa_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->sumberbeasiswa_id], [
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
        'sumberbeasiswa_id',
        'namasumberbeasiswa',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerDetailbeasiswa->totalCount){
    $gridColumnDetailbeasiswa = [
        ['class' => 'yii\grid\SerialColumn'],
            'detailbeasiswa_id',
            [
                'attribute' => 'jenisbeasiswa.jenisbeasiswa_id',
                'label' => 'Jenisbeasiswa'
            ],
                        'jangkawaktu',
            'nominalditerima',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDetailbeasiswa,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailbeasiswa']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Detailbeasiswa'),
        ],
        'export' => false,
        'columns' => $gridColumnDetailbeasiswa
    ]);
}
?>

    </div>
</div>
