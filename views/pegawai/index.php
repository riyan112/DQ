<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'pegawai_id',
        'nip',
        'nama_pegawai',
        'jk',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'status_kawin',
        'nama_pasangan',
        [
                'attribute' => 'sekolah_id',
                'label' => 'Sekolah',
                'value' => function($model){                   
                    return $model->sekolah->sekolah_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->asArray()->all(), 'sekolah_id', 'sekolah_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Sekolah', 'id' => 'grid-pegawai-search-sekolah_id']
            ],
        'tmt',
        [
                'attribute' => 'statuspegawai_id',
                'label' => 'Statuspegawai',
                'value' => function($model){
                    if ($model->statuspegawai)
                    {return $model->statuspegawai->statuspegawai;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Statuspegawai::find()->asArray()->all(), 'statuspegawai_id', 'statuspegawai'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Statuspegawai', 'id' => 'grid-pegawai-search-statuspegawai_id']
            ],
        [
                'attribute' => 'pangkatgolongan_id',
                'label' => 'Pangkatgolongan',
                'value' => function($model){
                    if ($model->pangkatgolongan)
                    {return $model->pangkatgolongan->pangkatgolongan_id;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pangkatgolongan::find()->asArray()->all(), 'pangkatgolongan_id', 'pangkatgolongan_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pangkatgolongan', 'id' => 'grid-pegawai-search-pangkatgolongan_id']
            ],
        'pendidikan_id',
        'jurusan',
        'nama_sekolah',
        'sertifikasi',
        'status_inpasing',
        [
                'attribute' => 'jenispegawai_id',
                'label' => 'Jenispegawai',
                'value' => function($model){                   
                    return $model->jenispegawai->jenispegawai_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jenispegawai::find()->asArray()->all(), 'jenispegawai_id', 'jenispegawai_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jenispegawai', 'id' => 'grid-pegawai-search-jenispegawai_id']
            ],
        'tugas_tambahan',
        'kaderisasi_nu',
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-pegawai']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span>  ' . Html::encode($this->title),
        ],
        'export' => false,
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
                'exportConfig' => [
                    ExportMenu::FORMAT_PDF => false
                ]
            ]) ,
        ],
    ]); ?>

</div>
