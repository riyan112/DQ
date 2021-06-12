<?php

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
                    <div class="icon">
                        <a href="index.php?r=siswa"><img src="img/Student.png" width="50px">
                            <div>Siswa</div>
                        </a>
                    </div>

                    <div class="">
                        <div class="icon"><a href="index.php?r=jeniskelamin"><img src="img/jeniskelamin2.png" width="50px"></div>
                        <div class="namaicon1">
                            <font size="2,5">Jenis Kelamin</font>
                        </div>
                        </a>
                    </div>
                    <div class="icon">
                        <a href="index.php?r=agama"><img src="img/agama.png" width="50px"> <br>Agama</a>
                    </div>

                    <div class="icon">
                        <a href="index.php?r=sekolah"><img src="img/Campus.png" width="50px">
                            <div>Sekolah</div>
                        </a>
                    </div>
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center; box-sizing: border-box;">
                        <div class="icon">
                            <a href="index.php?r=kelas"><img src="img/Class.png" width="50px">
                                <div>Kelas</div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=kelasparalel"><img src="img/classparalel.png" width="50px"> </div>
                            <div class="namaicon">
                                <font size="2,5">Kelas Paralel</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=statussiswa"><img src="img/statussiswa.png" width="50px"></div>
                            <div class="namaicon1">
                                <font size="2,5">Status<br> Siswa</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=asalsekolah"><img src="img/sekolahasal.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Asal <br> Sekolah</font>
                            </div>
                            </a>
                        </div>

                    </div>
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center; box-sizing: border-box;">
                        <div class="">
                            <div class="icon"><a href="index.php?r=jenissekolahasal"><img src="img/jenissekolahasal.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Jenis Asal Sekolah</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=statusasalsekolah"><img src="img/statusasalsekolah.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Status Asal Sekolah</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=hobi"><img src="img/badminton.png" width="50px"> </div>
                            <div class="namaicon">
                                <font size="2,5">Hobi</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=citacita"><img src="img/citacita.png" width="50px"></div>
                            <div class="namaicon">
                                <font size="2,5">Cita-cita</font>
                            </div>
                            </a>
                        </div>


                    </div>
                    <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center; box-sizing: border-box;">
                        <div class="">
                            <div class="icon"><a href="index.php?r=asalsekolah"><img src="img/classparalel.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Asal <br> Sekolah</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=jaraklokasisiswa"><img src="img/jaraklokasisiswa.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Jarak Lokasi Siswa</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=alattransportasi"><img src="img/transportasi.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Alat Transportasi</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=detailbeasiswa"><img src="img/beasiswa1.png" width="50px"></div>
                            <div class="namaicon1">
                                <font size="2,5">Detail Beasiswa</font>
                            </div>
                            </a>
                        </div>


                    </div>

                    <div style="display:flex; flex-wrap: wrap; flex-direction: row;
                         justify-content: center; box-sizing: border-box;">
                        <div class="">
                            <div class="icon"><a href="index.php?r=detailprestasi"><img src="img/prestasi.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Detail Prstasi</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=pendidikan"><img src="img/pendidikanortu.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Pendidikan Orang Tua</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=pekerjaan"><img src="img/pekerjaan.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Pekerjaan Orang Tua</font>
                            </div>
                            </a>
                        </div>
                        <div class="">
                            <div class="icon"><a href="index.php?r=penghasilanortu"><img src="img/penghasilan1.png" width="50px"> </div>
                            <div class="namaicon1">
                                <font size="2,5">Penghasilan Orang Tua</font>
                            </div>
                            </a>
                        </div>



                    </div>


                </div>


            </div>




        </div>
    <?php }; ?>
</div>