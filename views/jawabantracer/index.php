<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\JawabantracerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Jawabantracer';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="jawabantracer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Jawabantracer', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        'jawaban_id',
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
                'filterInputOptions' => ['placeholder' => 'Pertanyaan', 'id' => 'grid-jawabantracer-search-pertanyaan_id']
            ],
        [
                'attribute' => 'jenisjawaban_id',
                'label' => 'Jenisjawaban',
                'value' => function($model){                   
                    return $model->jenisjawaban->jenisjawaban_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jenisjawaban::find()->asArray()->all(), 'jenisjawaban_id', 'jenisjawaban_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jenisjawaban', 'id' => 'grid-jawabantracer-search-jenisjawaban_id']
            ],
        'isijawaban',
        'nourut',
        'bobot',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-jawabantracer']],
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
