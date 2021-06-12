<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\PresensiekskulSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Presensiekskul';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="presensiekskul-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Presensiekskul', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'presensiekskul_id',
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
                'filterInputOptions' => ['placeholder' => 'Siswa', 'id' => 'grid-presensiekskul-search-siswa_id']
            ],
        [
                'attribute' => 'jadwalekskul_id',
                'label' => 'Jadwalekskul',
                'value' => function($model){                   
                    return $model->jadwalekskul->jadwalekskul_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jadwalekskul::find()->asArray()->all(), 'jadwalekskul_id', 'jadwalekskul_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jadwalekskul', 'id' => 'grid-presensiekskul-search-jadwalekskul_id']
            ],
        'tgl_presensiekskkul',
        'statuskehadiranekskul',
        [
                'attribute' => 'izinekskul_id',
                'label' => 'Izinekskul',
                'value' => function($model){                   
                    return $model->izinekskul->izinekskul_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Izinekskul::find()->asArray()->all(), 'izinekskul_id', 'izinekskul_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Izinekskul', 'id' => 'grid-presensiekskul-search-izinekskul_id']
            ],
        'jam_masukekskul',
        'jam_pulangekskul',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-presensiekskul']],
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
