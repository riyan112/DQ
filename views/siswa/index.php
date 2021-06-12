<?php

/* @var $this yii\web\View */
/* @var $searchModel app\models\SiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

$this->title = 'Siswa';
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Siswa', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Advance Search', '#', ['class' => 'btn btn-info search-button']) ?>
        <a href="index.php?r=filesiswa" class="btn btn-primary">Upload File</a>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>
    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        /*[
                'attribute' => 'siswa_id',
                'label' => 'Siswa',
                'value' => function($model){                   
                    return $model->detailprestasis->detailprestasi_id;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->asArray()->all(), 'siswa_id', 'detailprestasi_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Detailprestasi', 'id' => 'grid-siswa-search-siswa_id']
            ],*/
        'nis',
        'nisn',
        'nik',
        'namasiswa',
        'tempatlahir',
        'tanggallahir',
        [
                'attribute' => 'jeniskelamin_id',
                'label' => 'Jenis Kelamin',
                'value' => function($model){
                    if ($model->jeniskelamin)
                    {return $model->jeniskelamin->namajeniskelamin;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jeniskelamin::find()->asArray()->all(), 'jeniskelamin_id', 'namajeniskelamin'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jeniskelamin', 'id' => 'grid-siswa-search-jeniskelamin_id']
            ],
        [
                'attribute' => 'agama_id',
                'label' => 'Agama',
                'value' => function($model){
                    if ($model->agama)
                    {return $model->agama->namaagama;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Agama::find()->asArray()->all(), 'agama_id', 'namaagama'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Agama', 'id' => 'grid-siswa-search-agama_id']
            ],
        [
                'attribute' => 'sekolah_id',
                'label' => 'Sekolah',
                'value' => function($model){                   
                    return $model->sekolah->nama_sekolah;                   
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Sekolah::find()->asArray()->all(), 'sekolah_id', 'nama_sekolah'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Sekolah', 'id' => 'grid-siswa-search-sekolah_id']
            ],
        [
                'attribute' => 'kelas_id',
                'label' => 'Kelas',
                'value' => function($model){
                    if ($model->kelas)
                    {return $model->kelas->namakelas;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Kelas::find()->asArray()->all(), 'kelas_id', 'namakelas'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Kelas', 'id' => 'grid-siswa-search-kelas_id']
            ],
        [
                'attribute' => 'kelasparalel_id',
                'label' => 'Kelas Paralel',
                'value' => function($model){
                    if ($model->kelasparalel)
                    {return $model->kelasparalel->keterangan;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Kelasparalel::find()->asArray()->all(), 'kelasparalel_id', 'keterangan'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Kelasparalel', 'id' => 'grid-siswa-search-kelasparalel_id']
            ],
        [
                'attribute' => 'statussiswa_id',
                'label' => 'Status Siswa',
                'value' => function($model){
                    if ($model->statussiswa)
                    {return $model->statussiswa->namastatussiswa;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Statussiswa::find()->asArray()->all(), 'statussiswa_id', 'namastatussiswa'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Statussiswa', 'id' => 'grid-siswa-search-statussiswa_id']
            ],
        [
                'attribute' => 'asalsekolah_id',
                'label' => 'Asal Sekolah',
                'value' => function($model){
                    if ($model->asalsekolah)
                    {return $model->asalsekolah->namaasalsekolah;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Asalsekolah::find()->asArray()->all(), 'asalsekolah_id', 'namaasalsekolah'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Asalsekolah', 'id' => 'grid-siswa-search-asalsekolah_id']
            ],
        [
                'attribute' => 'hobi_id',
                'label' => 'Hobi',
                'value' => function($model){
                    if ($model->hobi)
                    {return $model->hobi->namahobi;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Hobi::find()->asArray()->all(), 'hobi_id', 'namahobi'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Hobi', 'id' => 'grid-siswa-search-hobi_id']
            ],
        [
                'attribute' => 'citacita_id',
                'label' => 'Citacita',
                'value' => function($model){
                    if ($model->citacita)
                    {return $model->citacita->namacitacita;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Citacita::find()->asArray()->all(), 'citacita_id', 'namacitacita'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Citacita', 'id' => 'grid-siswa-search-citacita_id']
            ],
        'jumlahsaudara',
        [
                'attribute' => 'jenisasalsekolah_id',
                'label' => 'Jenisasalsekolah',
                'value' => function($model){
                    if ($model->jenisasalsekolah)
                    {return $model->jenisasalsekolah->namaasalsekolah;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jenisasalsekolah::find()->asArray()->all(), 'jenisasalsekolah_id', 'namaasalsekolah'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jenisasalsekolah', 'id' => 'grid-siswa-search-jenisasalsekolah_id']
            ],
        [
                'attribute' => 'statusasalsekolah_id',
                'label' => 'Status Asal Sekolah',
                'value' => function($model){
                    if ($model->statusasalsekolah)
                    {return $model->statusasalsekolah->namastatusasalsekolah;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Statusasalsekolah::find()->asArray()->all(), 'statusasalsekolah_id', 'namastatusasalsekolah'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Statusasalsekolah', 'id' => 'grid-siswa-search-statusasalsekolah_id']
            ],
        'kabupatenkotaasalsekolahasal',
        'alamat',
        'propinsi',
        'kabupaten',
        'kecamatan',
        'desakelurahan',
        'kodepos',
        [
                'attribute' => 'jaraklokasisiswa_id',
                'label' => 'Jarak Lokasi Siswa',
                'value' => function($model){
                    if ($model->jaraklokasisiswa)
                    {return $model->jaraklokasisiswa->namajaraklokasisiswa;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Jaraklokasisiswa::find()->asArray()->all(), 'jaraklokasisiswa_id', 'namajaraklokasisiswa'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Jaraklokasisiswa', 'id' => 'grid-siswa-search-jaraklokasisiswa_id']
            ],
        [
                'attribute' => 'alattransportasi_id',
                'label' => 'Alat Transportasi',
                'value' => function($model){
                    if ($model->alattransportasi)
                    {return $model->alattransportasi->namaalattransportasi;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Alattransportasi::find()->asArray()->all(), 'alattransportasi_id', 'namaalattransportasi'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Alattransportasi', 'id' => 'grid-siswa-search-alattransportasi_id']
            ],
        'tunarungu',
        'tunanetra',
        'tunadaksa',
        'tunagrahita',
        'tunalaras',
        'lambanbelajar',
        'sulitbelajar',
        'gangguankomunikasi',
        'bakatluarbiasa',
        'nomorkartukeluarga',
        'namaayah',
        'nikayah',
        [
                'attribute' => 'pendidikanayah_id',
                'label' => 'Pendidikan Ayah',
                'value' => function($model){
                    if ($model->pendidikanayah)
                    {return $model->pendidikanayah->namapendidikan;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->asArray()->all(), 'pendidikan_id', 'namapendidikan'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pendidikan', 'id' => 'grid-siswa-search-pendidikanayah_id']
            ],
        [
                'attribute' => 'pekerjaanayah_id',
                'label' => 'Pekerjaan Ayah',
                'value' => function($model){
                    if ($model->pekerjaanayah)
                    {return $model->pekerjaanayah->namapekerjaan;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->asArray()->all(), 'pekerjaan_id', 'namapekerjaan'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pekerjaan', 'id' => 'grid-siswa-search-pekerjaanayah_id']
            ],
        'namaibu',
        'nikibu',
        [
                'attribute' => 'pendidikanibu_id',
                'label' => 'Pendidikan Ibu',
                'value' => function($model){
                    if ($model->pendidikanibu)
                    {return $model->pendidikanibu->namapendidikan;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pendidikan::find()->asArray()->all(), 'pendidikan_id', 'namapendidikan'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pendidikan', 'id' => 'grid-siswa-search-pendidikanibu_id']
            ],
        [
                'attribute' => 'pekerjaanibu_id',
                'label' => 'Pekerjaan Ibu',
                'value' => function($model){
                    if ($model->pekerjaanibu)
                    {return $model->pekerjaanibu->namapekerjaan;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Pekerjaan::find()->asArray()->all(), 'pekerjaan_id', 'namapekerjaan'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Pekerjaan', 'id' => 'grid-siswa-search-pekerjaanibu_id']
            ],
        [
                'attribute' => 'penghasilanortu_id',
                'label' => 'Penghasilan Orang Tua',
                'value' => function($model){
                    if ($model->penghasilanortu)
                    {return $model->penghasilanortu->keteranganpenghasilanortu;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Penghasilanortu::find()->asArray()->all(), 'penghasilanortu_id', 'keteranganpenghasilanortu'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Penghasilanortu', 'id' => 'grid-siswa-search-penghasilanortu_id']
            ],
        'nomorkkskps',
        'nomorpkh',
        'nomorkip',
        'statuspenerimapipbsm',
        'alasanstatuspenerimaapipbsm',
        'periodepenerimaanpipbsm',
        /*[
                'attribute' => 'detailprestasi_id',
                'label' => 'Detailprestasi',
                'value' => function($model){
                    if ($model->detailprestasi)
                    {return $model->detailprestasi->detailprestasi_id;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Detailprestasi::find()->asArray()->all(), 'detailprestasi_id', 'detailprestasi_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Detailprestasi', 'id' => 'grid-siswa-search-detailprestasi_id']
            ],
        [
                'attribute' => 'detailbeasiswa_id',
                'label' => 'Detailbeasiswa',
                'value' => function($model){
                    if ($model->detailbeasiswa)
                    {return $model->detailbeasiswa->detailbeasiswa_id;}
                    else
                    {return NULL;}
                },
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => \yii\helpers\ArrayHelper::map(\app\models\Detailbeasiswa::find()->asArray()->all(), 'detailbeasiswa_id', 'detailbeasiswa_id'),
                'filterWidgetOptions' => [
                    'pluginOptions' => ['allowClear' => true],
                ],
                'filterInputOptions' => ['placeholder' => 'Detailbeasiswa', 'id' => 'grid-siswa-search-detailbeasiswa_id']
            ],*/
        'fotosiswa',
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
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-siswa']],
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
