<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'User'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
        ['attribute' => 'id', 'visible' => false],
        'username',
        'auth_key',
        'password_hash',
        'confirmation_token',
        'status',
        'superadmin',
        'registration_ip',
        'bind_to_ip',
        'email:email',
        'email_confirmed:email',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]);
?>
    </div>
    
    <div class="row">
<?php
if($providerAuthAssignment->totalCount){
    $gridColumnAuthAssignment = [
        ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'itemName.name',
                'label' => 'Item Name'
            ],
                ];
    echo Gridview::widget([
        'dataProvider' => $providerAuthAssignment,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-auth-assignment']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('Auth Assignment'),
        ],
        'export' => false,
        'columns' => $gridColumnAuthAssignment
    ]);
}
?>

    </div>
    
    <div class="row">
<?php
if($providerUserVisitLog->totalCount){
    $gridColumnUserVisitLog = [
        ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'visible' => false],
            'token',
            'ip',
            'language',
            'user_agent',
                        'visit_time:datetime',
            'browser',
            'os',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerUserVisitLog,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container-user-visit-log']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<span class="glyphicon glyphicon-book"></span> ' . Html::encode('User Visit Log'),
        ],
        'export' => false,
        'columns' => $gridColumnUserVisitLog
    ]);
}
?>

    </div>
</div>
