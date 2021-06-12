<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailprestasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Detailprestasi';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="detailprestasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detailprestasi', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        [
                'attribute' => 'detailprestasi_id',
                'label' => 'Detailprestasi',
                'value' => function($model){                   
                    return $model->siswas->siswa_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->asArray()->all(), 'detailprestasi_id', 'siswa_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Siswa', 'id' => 'grid-detailprestasi-search-detailprestasi_id']
            ],
        [
                'attribute' => 'siswa_id',
                'label' => 'Siswa',
                'value' => function($model){
                    if ($model->siswa)
                    {return $model->siswa->siswa_id;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Siswa::find()->asArray()->all(), 'siswa_id', 'namasiswa'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Siswa', 'id' => 'grid-detailprestasi-search-siswa_id']
            ],
        [
                'attribute' => 'bidangprestasi_id',
                'label' => 'Bidangprestasi',
                'value' => function($model){
                    if ($model->bidangprestasi)
                    {return $model->bidangprestasi->namabidangprestasi;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Bidangprestasi::find()->asArray()->all(), 'bidangprestasi_id', 'namabidangprestasi'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Bidangprestasi', 'id' => 'grid-detailprestasi-search-bidangprestasi_id']
            ],
        [
                'attribute' => 'tingkatprestasi_id',
                'label' => 'Tingkatprestasi',
                'value' => function($model){
                    if ($model->tingkatprestasi)
                    {return $model->tingkatprestasi->keterangantingkatprestasi;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Tingkatprestasi::find()->asArray()->all(), 'tingkatprestasi_id', 'keterangantingkatprestasi'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Tingkatprestasi', 'id' => 'grid-detailprestasi-search-tingkatprestasi_id']
            ],
        [
                'attribute' => 'peringkat_id',
                'label' => 'Peringkat',
                'value' => function($model){
                    if ($model->peringkat)
                    {return $model->peringkat->keteranganperingkat;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Peringkat::find()->asArray()->all(), 'peringkat_id', 'keteranganperingkat'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Peringkat', 'id' => 'grid-detailprestasi-search-peringkat_id']
            ],
        'tahunmeraihprestasi',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailprestasi']],
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
