<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\PresensisiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Presensisiswa';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="presensisiswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Presensisiswa', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'presensisiswa_id',
        [
                'attribute' => 'siswa_id',
                'label' => 'Siswa',
                'value' => function($model){                   
                    return $model->siswa->siswa_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->asArray()->all(), 'siswa_id', 'siswa_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Siswa', 'id' => 'grid-presensisiswa-search-siswa_id']
            ],
        [
                'attribute' => 'jadwalpresensisiswa_id',
                'label' => 'Jadwalpresensisiswa',
                'value' => function($model){                   
                    return $model->jadwalpresensisiswa->jadwalpresensisiswa_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalpresensisiswa::find()->asArray()->all(), 'jadwalpresensisiswa_id', 'jadwalpresensisiswa_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jadwalpresensisiswa', 'id' => 'grid-presensisiswa-search-jadwalpresensisiswa_id']
            ],
        'tgl_presensi',
        'statuskehadiran',
        [
                'attribute' => 'izinsiswa_id',
                'label' => 'Izinsiswa',
                'value' => function($model){                   
                    return $model->izinsiswa->izinsiswa_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Izinsiswa::find()->asArray()->all(), 'izinsiswa_id', 'izinsiswa_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Izinsiswa', 'id' => 'grid-presensisiswa-search-izinsiswa_id']
            ],
        'jam_masuk',
        'jam_pulang',
        'lokasi',
        'keterangan',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensisiswa']],
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
