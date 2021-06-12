<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Jenisjawaban */

$this->title = $model->jenisjawaban_id;
$this->params['breadcrumbs'][] = ['label' => 'Jenisjawaban', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenisjawaban-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Jenisjawaban'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->jenisjawaban_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->jenisjawaban_id], [
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
        'jenisjawaban_id',
        'keteranganjawaban',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerJawabantracer->totalCount){
    $gridColumnJawabantracer = [
        ['class' => 'yii\grid\SerialColumn'],
            'jawaban_id',
            [
                'attribute' => 'pertanyaan.pertanyaan_id',
                'label' => 'Pertanyaan'
            ],
                        'isijawaban',
            'nourut',
            'bobot',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerJawabantracer,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jawabantracer']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Jawabantracer'),
        ],
        'export' => false,
        'columns' => $gridColumnJawabantracer
    ]);
}
?>

    </div>
</div>
