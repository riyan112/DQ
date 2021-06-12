<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Detailpengisiantracer */

$this->title = $model->detailpengisiantracer_id;
$this->params['breadcrumbs'][] = ['label' => 'Detailpengisiantracer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detailpengisiantracer-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Detailpengisiantracer'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->detailpengisiantracer_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->detailpengisiantracer_id], [
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
        'detailpengisiantracer_id',
        [
            'attribute' => 'pengisiantracer.pengisiantracer_id',
            'label' => 'Pengisiantracer',
        ],
        [
            'attribute' => 'periodetracer.periodetracer_id',
            'label' => 'Periodetracer',
        ],
        [
            'attribute' => 'pertanyaan.pertanyaan_id',
            'label' => 'Pertanyaan',
        ],
        [
            'attribute' => 'jawaban.jawaban_id',
            'label' => 'Jawaban',
        ],
        'jawabanesai',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    <div class="row">
        <h4>Pengisiantracer<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPengisiantracer = [
        'alumni_id',
        'saran',
        'keterangan',
    ];
    echo DetailView::widget([
        'model' => $model->pengisiantracer,
        'attributes' => $gridColumnPengisiantracer    ]);
    ?>
    <div class="row">
        <h4>Periodetracer<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPeriodetracer = [
        'jenistracer_id',
        'keteranganperiodetracer',
        'tahun',
        'isaktifperiode',
    ];
    echo DetailView::widget([
        'model' => $model->periodetracer,
        'attributes' => $gridColumnPeriodetracer    ]);
    ?>
    <div class="row">
        <h4>Pertanyaan<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnPertanyaan = [
        [
            'attribute' => 'periodetracer.periodetracer_id',
            'label' => 'Periodetracer',
        ],
        'jenistracer_id',
        'jenispertanyaan_id',
        'isipertanyaan',
        'nourut',
        'halaman',
        'namahalaman',
        'isaktifpertanyaan',
    ];
    echo DetailView::widget([
        'model' => $model->pertanyaan,
        'attributes' => $gridColumnPertanyaan    ]);
    ?>
    <div class="row">
        <h4>Jawabantracer<?= ' '. Html::encode($this->title) ?></h4>
    </div>
    <?php 
    $gridColumnJawabantracer = [
        [
            'attribute' => 'pertanyaan.pertanyaan_id',
            'label' => 'Pertanyaan',
        ],
        'jenisjawaban_id',
        'isijawaban',
        'nourut',
        'bobot',
    ];
    echo DetailView::widget([
        'model' => $model->jawaban,
        'attributes' => $gridColumnJawabantracer    ]);
    ?>
</div>
