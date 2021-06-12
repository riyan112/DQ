<?php

use app\models\base\Siswa;
use webvimark\modules\UserManagement\models\User;
/* @var $this yii\web\View */

$this->title = '';
?>
<style>
    .content {
        padding: 0
    }

    .depan {
        display: flex;
        justify-content: center;
        padding: 20px;
        z-index: 2
    }

    .mylogo {
        box-shadow: 0 6px 5px #ccc;
        margin: auto
    }

    .mylogo2 {
        border-radius: 10px;
        box-shadow: 0 6px 5px #ccc
    }

    .btn {
        margin-left: 10px;
        margin-bottom: 10px
    }

    .kontent1 {
        z-index: 1
    }

    .video-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0
    }

    .video-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute
    }

    .logodepan {
        justify-content: center;
        border-radius: 10px;
        box-shadow: 0 6px 5px #ccc
    }

    .icon {
        width: 70px;
        height: 70px;
        line-height: 60px;
        border-radius: 5px;
        background-color: #ededed;
        box-shadow: 5px 5px 8px #888;
        margin: 5px
    }

    .icon1 {
        height: 70px;
        line-height: 60px;
        border-radius: 5px;
        background-color: #ededed;
        box-shadow: 5px 5px 8px #888;
        margin: 5px
    }

    .namaicon {
        width: 80px;
        height: 10px;
        line-height: 30px;
    }

    .namaicon1 {
        width: 75px;
        height: 40px;
        line-height: 20px;
        padding-left: -20;
    }
</style>



<div class="site-index">

    <div class="depan">
        <img src="img/logodepan.jpg" class="img-responsive" data-pagespeed-url-hash="637770850" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
        <br>
    </div>
    <?php if ($user = Yii::$app->user->identity) { ?>
        <div class="row text-center">

            <div class="row" style="margin-left:25px; margin-right:25px; margin-bottom:50px">
                <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center;margin-top:30px">

                    <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center; box-sizing: border-box;">
                        <?php if (User::hasRole('Admin', $superAdminAllowed = true)) { ?>
                            <div class="">
                                <div class="icon"><a href="index.php?r=site/datamaster"><img src="img/datamaster.png" width="50px"> </div>
                                <div class="namaicon1">
                                    <font size="2,5">Data Master</font>
                                </div>
                            </a>
                            </div>
                            <?php }; ?>

                            <?php if (User::hasRole('Admin', $superAdminAllowed = true)) { ?>
                            <div class="">
                                <div class="icon"><a href="index.php?r=site/datatransaksi"><img src="img/datatransaksi.png" width="50px"> </div>
                                <div class="namaicon1">
                                    <font size="2,5">Data Transaksi</font>
                                </div>
                                </a>
                            </div>
                            <?php }; ?>

                            <?php if (User::hasRole('Ortu', $superAdminAllowed = false)) { ?>
                            <div class="">
                                <div class="icon"><a href="index.php?r=siswa%2Fbiodatasiswa&id=<?php $user = Yii::$app->user->identity->username; echo $user ?>"><img src="img/datatransaksi.png" width="50px"> </div>
                                <div class="namaicon1">
                                    <font size="2,5">Biodata Siswa</font>
                                </div>
                                </a>
                            </div>
                            <?php }; ?>

                            <?php /*$ortu = Yii::$app->user->identity->username;
                            
                            var_dump($siswa);
                            die();
                            if ($ortu = $siswa['nisn']) {
                                echo $siswa['siswa_id'];
                            }*/
                             ?>

                    </div>


                </div>




            </div>
        <?php }; ?>
        </div>