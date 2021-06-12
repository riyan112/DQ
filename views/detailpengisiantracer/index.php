<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetailpengisiantracerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Detailpengisiantracer';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="detailpengisiantracer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detailpengisiantracer', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'detailpengisiantracer_id',
        [
                'attribute' => 'pengisiantracer_id',
                'label' => 'Pengisiantracer',
                'value' => function($model){                   
                    return $model->pengisiantracer->pengisiantracer_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pengisiantracer::find()->asArray()->all(), 'pengisiantracer_id', 'pengisiantracer_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pengisiantracer', 'id' => 'grid-detailpengisiantracer-search-pengisiantracer_id']
            ],
        [
                'attribute' => 'periodetracer_id',
                'label' => 'Periodetracer',
                'value' => function($model){                   
                    return $model->periodetracer->periodetracer_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Periodetracer::find()->asArray()->all(), 'periodetracer_id', 'periodetracer_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Periodetracer', 'id' => 'grid-detailpengisiantracer-search-periodetracer_id']
            ],
        [
                'attribute' => 'pertanyaan_id',
                'label' => 'Pertanyaan',
                'value' => function($model){                   
                    return $model->pertanyaan->pertanyaan_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pertanyaan::find()->asArray()->all(), 'pertanyaan_id', 'pertanyaan_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pertanyaan', 'id' => 'grid-detailpengisiantracer-search-pertanyaan_id']
            ],
        [
                'attribute' => 'jawaban_id',
                'label' => 'Jawaban',
                'value' => function($model){                   
                    return $model->jawaban->jawaban_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jawabantracer::find()->asArray()->all(), 'jawaban_id', 'jawaban_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jawabantracer', 'id' => 'grid-detailpengisiantracer-search-jawaban_id']
            ],
        'jawabanesai',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-detailpengisiantracer']],
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
