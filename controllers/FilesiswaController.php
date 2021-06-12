<?php

namespace app\controllers;

use app\models\base\Filesiswa as BaseFilesiswa;
use app\models\base\Siswa;
use Yii;
use app\models\Filesiswa;
use app\models\FilesiswaSearch;
use PhpOffice\PhpSpreadsheet\IOFactory;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FilesiswaController implements the CRUD actions for Filesiswa model.
 */
class FilesiswaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Filesiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilesiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Filesiswa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Filesiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()

    /*{
        

        $model = new Filesiswa(['scenario' => 'create']);

        if ($model->load(Yii::$app->request->post())) {

            try {
                $picture = UploadedFile::getInstance($model, 'namafilesiswa');
                $model->namafilesiswa =  $_POST['Filesiswa']['filesiswa_id'] . '.' . $picture->extension;
                if ($model->save()) {
                    $picture->saveAs('filesiswa/' . $model->filesiswa_id . '.' . $picture->extension);
                    Yii::$app->getSession()->setFlash('succes', 'Data Tersimpan!');
                    return $this->redirect(['view', 'id' => $model->filesiswa_id]);
                } else {
                    Yii::$app->getSession()->setFlash('error', 'Data Tidak Tersimpan!');
                    return $this->render('create', ['model' => $model]);
                }
            } catch (exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }
        } else {

            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/
    
        {
        

            $model = new Filesiswa(['scenario' => 'create']);
            $filesiswa_id = \app\models\Filesiswa::find()->where(['filesiswa_id' => $model])->one();
            if ($model->load(Yii::$app->request->post())) {
            try {
                
                $berkassiswa = UploadedFile::getInstance($model, 'namafilesiswa');

                
                $filename = $model->getPrimaryKey();
                $model->namafilesiswa = $berkassiswa->name;
                $model->ukuran = $berkassiswa->size;
                if ($model->save(false)) {
                    $filename = $model->getPrimaryKey();
                    // ambil id yg increment dari filesiswa_id

                    

                    $berkassiswa->saveAs('filesiswa/' . $filename . '.xlsx');
                    // simpan file ke folder "filesiswa/" dengan nama sesuai id incrementnya

                    //$qry = "update filesiswa set tgl_upload=now() where filesiswa_id='$filename'";
                    //$db->createCommand($qry)->execute();

                    Yii::$app->getSession()->setFlash('success', 'File telah diupload');
                    return $this->redirect(['view', 'id' => $model->filesiswa_id]);
                } else {
                    Yii::$app->getSession()->setFlash('error', 'File gagal diupload');
                    return $this->render('create', ['model' => $model]);
                }
            } catch (Exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }
        }
       

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /*{
        $model = new Filesiswa();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->filesiswa_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Updates an existing Filesiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)

    {

        // scenario create berkaitan dengan on create di model Penagih
        $model = $this->findModel($id);
        $c = $model['namafilesiswa'];
        //$fi = Penagih::find('fotosiswa')->where(['fotosiswa' => $c])->one();

        if ($model->load(Yii::$app->request->post())) {

            try {
                $file = UploadedFile::getInstance($model, 'namafilesiswa');
                // ambil file yang diupload
                $berkassiswa = UploadedFile::getInstance($model, 'namafilesiswa');

                if ($file == !null) {
                    $model->namafilesiswa = $file->name;
                    $model->ukuran = $berkassiswa->size;
                    // save nama file ke field ttd sesuai dengan nisn
                } else {
                    $model->namafilesiswa = $c;
                }
                if ($model->save(false)) {
                    if ($file == !null) {
                        // jika file tidak kosong maka save filenya 
                        $file->saveAs('filesiswa/' . $model->filesiswa_id . '.' . $file->extension);
                        // simpan file dengan nama sesuai dengan nisn

                        Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                        return $this->redirect(['view', 'id' => $model->filesiswa_id]);
                    } else {

                        //jika filenya kosong atau user tidak mengupload file maka
                        // 1. cek kosong karna hanya update data
                        // 2. ksong karena bebeh ngisi

                        $cek = Filesiswa::find('namafilesiswa')->where(['namafilesiswa' => $c])->one();

                        if ($cek == null) {
                            $model->namafilesiswa = $c;
                            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                            return $this->redirect(['view', 'id' => $model->filesiswa_id]);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                            return $this->redirect(['view', 'id' => $model->filesiswa_id]);
                        }
                    }
                } else {
                    Yii::$app->getSession()->setFlash('error', 'Data Tidak Tersimpan');
                    return $this->render('update', ['model' => $model]);
                }
            } catch (Exception $e) {
                Yii::$app->getSession()->setFlash('error', "{$e->getMessage()}");
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /*{
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->filesiswa_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Deletes an existing Filesiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }

    
    /**
     * Finds the Filesiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Filesiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Filesiswa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    public function actionImport($id)
    {
        $db = Yii::$app->db;
        $model = new Siswa();
        $filesiswa = Filesiswa::findOne($id);

        $model->scenario = Siswa::SCENARIO_IMPORT;

        if ($filesiswa != null) {
            $file = \Yii::getAlias('@app/web/filesiswa/' . $id . '.xlsx');

            if ($file) {
                $readerType = IOFactory::identify($file);
                $objReader = IOFactory::createReader($readerType);
                $objPHPExcel = $objReader->load($file);
                $sheet  = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
                // $var  = PHPExcel_Style_NumberFormat::toFormattedString($file[1],  'YYYY-MM-DD');

                for ($row = 2; $row <= $highestRow; $row++) {
                    $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                    $siswa_id = $rowData[0][1];
                    $nis = $rowData[0][2];
                    $nisn = $rowData[0][3];
                    $nik = $rowData[0][4];
                    $namasiswa = $rowData[0][5];
                    $tempatlahir = $rowData[0][6];
                    $tanggallahir = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rowData[0][7])->format('Y-m-d');
                    $jeniskelamin_id = $rowData[0][8];
                    $agama_id = $rowData[0][9];
                    $sekolah_id = $rowData[0][10];
                    $kelas_id = $rowData[0][11];
                    $kelasparalel_id = $rowData[0][12];
                    $statussiswa_id = $rowData[0][13];
                    $asalsekolah_id = $rowData[0][14];
                    $hobi_id = $rowData[0][15];
                    $citacita_id = $rowData[0][16];
                    $jumlahsaudara = $rowData[0][17];
                    $jenisasalsekolah_id = $rowData[0][18];
                    $statusasalsekolah_id = $rowData[0][19];
                    $kabupatenkotaasalsekolahasal = $rowData[0][20];
                    $alamat = $rowData[0][21];
                    $propinsi = $rowData[0][22];
                    $kabupaten = $rowData[0][23];
                    $kecamatan = $rowData[0][24];
                    $desakelurahan = $rowData[0][25];
                    $kodepos = $rowData[0][26];
                    $jaraklokasisiswa_id = $rowData[0][27];
                    $alattransportasi_id = $rowData[0][28];
                    $tunarungu = $rowData[0][29];
                    $tunanetra = $rowData[0][30];
                    $tunadaksa = $rowData[0][31];
                    $tunagrahita = $rowData[0][32];
                    $tunalaras = $rowData[0][33];
                    $lambanbelajar = $rowData[0][34];
                    $sulitbelajar = $rowData[0][35];
                    $gangguankomunikasi = $rowData[0][36];
                    $bakatluarbiasa = $rowData[0][37];
                    $nomorkartukeluarga = $rowData[0][38];
                    $namaayah = $rowData[0][39];
                    $nikayah = $rowData[0][40];
                    $pendidikanayah_id = $rowData[0][41];
                    $pekerjaanayah_id = $rowData[0][42];
                    $namaibu = $rowData[0][43];
                    $nikibu = $rowData[0][44];
                    $pendidikanibu_id = $rowData[0][45];
                    $pekerjaanibu_id = $rowData[0][46];
                    $penghasilanortu_id = $rowData[0][47];
                    $nomorkkskps = $rowData[0][48];
                    $nomorpkh = $rowData[0][49];
                    $nomorkip = $rowData[0][50];
                    $statuspenerimapipbsm = $rowData[0][51];
                    $alasanstatuspenerimaapipbsm = $rowData[0][52];
                    $periodepenerimaanpipbsm = $rowData[0][53];


                    $filesiswa = \Yii::$app->db->createCommand("select count(*) as jml from siswa where siswa_id=:siswa_id", [
                        ':siswa_id' => $siswa_id,
                    ])->queryScalar();
                    //$coba = $filesiswa === '0';
                    //var_dump($coba);
                    //die();

                    if ($filesiswa == 0) { // jika belum ada datanya
                        $insert = \Yii::$app->db->createCommand("INSERT INTO siswa "
                            . "(siswa_id, nis, nisn, nik, namasiswa, tempatlahir, tanggallahir, jeniskelamin_id, agama_id, sekolah_id, kelas_id, kelasparalel_id, statussiswa_id, asalsekolah_id, hobi_id, citacita_id, jumlahsaudara, jenisasalsekolah_id, statusasalsekolah_id, kabupatenkotaasalsekolahasal, alamat, propinsi, kabupaten, kecamatan, desakelurahan, kodepos, jaraklokasisiswa_id, alattransportasi_id, tunarungu, tunanetra, tunadaksa, tunagrahita, tunalaras, lambanbelajar, sulitbelajar, gangguankomunikasi, bakatluarbiasa, nomorkartukeluarga, namaayah, nikayah, pendidikanayah_id, pekerjaanayah_id, namaibu, nikibu, pendidikanibu_id, pekerjaanibu_id, penghasilanortu_id, nomorkkskps, nomorpkh, nomorkip, statuspenerimapipbsm, alasanstatuspenerimaapipbsm, periodepenerimaanpipbsm) "


                            . "VALUES(:siswa_id, :nis, :nisn, :nik, :namasiswa, :tempatlahir, :tanggallahir, :jeniskelamin_id, :agama_id, :sekolah_id, :kelas_id, :kelasparalel_id, :statussiswa_id, :asalsekolah_id, :hobi_id, :citacita_id, :jumlahsaudara, :jenisasalsekolah_id, :statusasalsekolah_id, :kabupatenkotaasalsekolahasal, :alamat, :propinsi, :kabupaten, :kecamatan, :desakelurahan, :kodepos, :jaraklokasisiswa_id, :alattransportasi_id, :tunarungu, :tunanetra, :tunadaksa, :tunagrahita, :tunalaras, :lambanbelajar, :sulitbelajar, :gangguankomunikasi, :bakatluarbiasa, :nomorkartukeluarga, :namaayah, :nikayah, :pendidikanayah_id, :pekerjaanayah_id, :namaibu, :nikibu, :pendidikanibu_id, :pekerjaanibu_id, :penghasilanortu_id, :nomorkkskps, :nomorpkh, :nomorkip, :statuspenerimapipbsm, :alasanstatuspenerimaapipbsm, :periodepenerimaanpipbsm)", [
                                ':siswa_id' => $siswa_id,
                                ':nis' => $nis,
                                ':nisn' => $nisn,
                                ':nik' => $nik,
                                ':namasiswa' => $namasiswa,
                                ':tempatlahir' => $tempatlahir,
                                ':tanggallahir' => $tanggallahir,
                                ':jeniskelamin_id' => $jeniskelamin_id,
                                ':agama_id' => $agama_id,
                                ':sekolah_id' => $sekolah_id,
                                ':kelas_id' => $kelas_id,
                                ':kelasparalel_id' => $kelasparalel_id,
                                ':statussiswa_id' => $statussiswa_id,
                                ':asalsekolah_id' => $asalsekolah_id,
                                ':hobi_id' => $hobi_id,
                                ':citacita_id' => $citacita_id,
                                ':jumlahsaudara' => $jumlahsaudara,
                                ':jenisasalsekolah_id' => $jenisasalsekolah_id,
                                ':statusasalsekolah_id' => $statusasalsekolah_id,
                                ':kabupatenkotaasalsekolahasal' => $kabupatenkotaasalsekolahasal,
                                ':alamat' => $alamat,
                                ':propinsi' => $propinsi,
                                ':kabupaten' => $kabupaten,
                                ':kecamatan' => $kecamatan,
                                ':desakelurahan' => $desakelurahan,
                                ':kodepos' => $kodepos,
                                ':jaraklokasisiswa_id' => $jaraklokasisiswa_id,
                                ':alattransportasi_id' => $alattransportasi_id,
                                ':tunarungu' => $tunarungu,
                                ':tunanetra' => $tunanetra,
                                ':tunadaksa' => $tunadaksa,
                                ':tunagrahita' => $tunagrahita,
                                ':tunalaras' => $tunalaras,
                                ':lambanbelajar' => $lambanbelajar,
                                ':sulitbelajar' => $sulitbelajar,
                                ':gangguankomunikasi' => $gangguankomunikasi,
                                ':bakatluarbiasa' => $bakatluarbiasa,
                                ':nomorkartukeluarga' => $nomorkartukeluarga,
                                ':namaayah' => $namaayah,
                                ':nikayah' => $nikayah,
                                ':pendidikanayah_id' => $pendidikanayah_id,
                                ':pekerjaanayah_id' => $pekerjaanayah_id,
                                ':namaibu' => $namaibu,
                                ':nikibu' => $nikibu,
                                ':pendidikanibu_id' => $pendidikanibu_id,
                                ':pekerjaanibu_id' => $pekerjaanibu_id,
                                ':penghasilanortu_id' => $penghasilanortu_id,
                                ':nomorkkskps' => $nomorkkskps,
                                ':nomorpkh' => $nomorpkh,
                                ':nomorkip' => $nomorkip,
                                ':statuspenerimapipbsm' => $statuspenerimapipbsm,
                                ':alasanstatuspenerimaapipbsm' => $alasanstatuspenerimaapipbsm,
                                ':periodepenerimaanpipbsm' => $periodepenerimaanpipbsm,

                        ])->execute();
                    } else {
                        $update = \Yii::$app->db->createCommand("UPDATE siswa SET namasiswa = :namasiswa WHERE siswa_id=:id")
                            ->bindValue(':id', $siswa_id)
                            ->bindValue(':namasiswa', $namasiswa)
                            ->execute();
                    }
                }
                $proses = "update filesiswa set tgl_proses=now() where filesiswa_id=$id";
                $db->createCommand($proses)->execute();

                Yii::$app->getSession()->setFlash('success', 'Data berhasil di Import');
                return $this->redirect(['index']);
            }
            
        }
    }
}
