<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Filezip */

$this->title = $model->filezip_id;
$this->params['breadcrumbs'][] = ['label' => 'Filezip', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="filezip-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Filezip'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->filezip_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->filezip_id], [
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
        'filezip_id',
        'namafilezip',
        'ukuran',
        'tgl_upload',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
</div>
