<?php

namespace app\controllers;

use Yii;
use app\models\Siswa;
use app\models\SiswaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * SiswaController implements the CRUD actions for Siswa model.
 */
class SiswaController extends Controller
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
     * Lists all Siswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Siswa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerAlumni = new \yii\data\ArrayDataProvider([
            'allModels' => $model->alumnis,
        ]);
        $providerDetailprestasi = new \yii\data\ArrayDataProvider([
            'allModels' => $model->detailprestasis,
        ]);
        $providerEkskul = new \yii\data\ArrayDataProvider([
            'allModels' => $model->ekskuls,
        ]);
        $providerHasilkaryasiswa = new \yii\data\ArrayDataProvider([
            'allModels' => $model->hasilkaryasiswas,
        ]);
        $providerIzinekskul = new \yii\data\ArrayDataProvider([
            'allModels' => $model->izinekskuls,
        ]);
        $providerIzinsiswa = new \yii\data\ArrayDataProvider([
            'allModels' => $model->izinsiswas,
        ]);
        $providerMutasi = new \yii\data\ArrayDataProvider([
            'allModels' => $model->mutasis,
        ]);
        $providerPelanggaran = new \yii\data\ArrayDataProvider([
            'allModels' => $model->pelanggarans,
        ]);
        $providerPresensiekskul = new \yii\data\ArrayDataProvider([
            'allModels' => $model->presensiekskuls,
        ]);
        $providerPresensisiswa = new \yii\data\ArrayDataProvider([
            'allModels' => $model->presensisiswas,
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'providerAlumni' => $providerAlumni,
            'providerDetailprestasi' => $providerDetailprestasi,
            'providerEkskul' => $providerEkskul,
            'providerHasilkaryasiswa' => $providerHasilkaryasiswa,
            'providerIzinekskul' => $providerIzinekskul,
            'providerIzinsiswa' => $providerIzinsiswa,
            'providerMutasi' => $providerMutasi,
            'providerPelanggaran' => $providerPelanggaran,
            'providerPresensiekskul' => $providerPresensiekskul,
            'providerPresensisiswa' => $providerPresensisiswa,
        ]);
    }

    /**
     * Creates a new Siswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionBiodatasiswa($id)
    {
       
        $id = Yii::$app->user->identity->username;
        $siswa_id = Siswa::find()->where(['nisn' => $id])->one();
        $siswa = $siswa_id['nisn'];
        //var_dump($siswa);
        //die();
        //$model = $this->findModel($id);
        
        //$providerSiswa = new \yii\data\ArrayDataProvider([
           // 'allModels' => $model->siswa,
            

        //])
        

        return $this->render('biodatasiswa', [
            'model' => $this->findModel($siswa_id),

        ]);
    }




    public function actionCreate()
    /*{
        $model = new Siswa();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->siswa_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/

    {
        

        $model = new Siswa(['scenario' => 'create']);

        if ($model->load(Yii::$app->request->post())) {

            try {
                $picture = UploadedFile::getInstance($model, 'fotosiswa');
                $model->fotosiswa =  $_POST['Siswa']['nisn'] . '.' . $picture->extension;
                if ($model->save()) {
                    $picture->saveAs('img_fotosiswa/' . $model->nisn . '.' . $picture->extension);
                    Yii::$app->getSession()->setFlash('succes', 'Data Tersimpan!');
                    return $this->redirect(['view', 'id' => $model->siswa_id]);
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
    }

    /**
     * Updates an existing Siswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)


    {

        // scenario create berkaitan dengan on create di model Penagih
        $model = $this->findModel($id);
        $c = $model['fotosiswa'];
        //$fi = Penagih::find('fotosiswa')->where(['fotosiswa' => $c])->one();

        if ($model->load(Yii::$app->request->post())) {

            try {
                $picture = UploadedFile::getInstance($model, 'fotosiswa');
                // ambil file yang diupload

                if ($picture == !null) {
                    $model->fotosiswa = $model->nisn . '.' . $picture->extension;
                    // save nama file ke field ttd sesuai dengan nisn
                } else {
                    $model->fotosiswa = $c;
                }
                if ($model->save(false)) {
                    if ($picture == !null) {
                        // jika file tidak kosong maka save filenya 
                        $picture->saveAs('img_fotosiswa/' . $model->nisn . '.' . $picture->extension);
                        // simpan file dengan nama sesuai dengan nisn

                        Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                        return $this->redirect(['view', 'id' => $model->siswa_id]);
                    } else {

                        //jika filenya kosong atau user tidak mengupload file maka
                        // 1. cek kosong karna hanya update data
                        // 2. ksong karena bebeh ngisi

                        $cek = Siswa::find('fotosiswa')->where(['fotosiswa' => $c])->one();

                        if ($cek == null) {
                            $model->ttd = $c;
                            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                            return $this->redirect(['view', 'id' => $model->siswa_id]);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'Data Tersimpan');
                            return $this->redirect(['view', 'id' => $model->siswa_id]);
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
            return $this->redirect(['view', 'id' => $model->siswa_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Deletes an existing Siswa model.
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
     * Finds the Siswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Siswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Siswa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Alumni
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddAlumni()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Alumni');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formAlumni', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Detailprestasi
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddDetailprestasi()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Detailprestasi');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formDetailprestasi', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Ekskul
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddEkskul()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Ekskul');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formEkskul', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Hasilkaryasiswa
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddHasilkaryasiswa()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Hasilkaryasiswa');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formHasilkaryasiswa', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Izinekskul
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddIzinekskul()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Izinekskul');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formIzinekskul', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Izinsiswa
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddIzinsiswa()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Izinsiswa');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formIzinsiswa', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Mutasi
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddMutasi()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Mutasi');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formMutasi', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Pelanggaran
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddPelanggaran()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Pelanggaran');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPelanggaran', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Presensiekskul
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddPresensiekskul()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Presensiekskul');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPresensiekskul', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /**
     * Action to load a tabular form grid
     * for Presensisiswa
     * @author Yohanes Candrajaya <moo.tensai@gmail.com>
     * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
     *
     * @return mixed
     */
    public function actionAddPresensisiswa()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('Presensisiswa');
            if (!empty($row)) {
                $row = array_values($row);
            }
            if ((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('_action') == 'load' && empty($row)) || Yii::$app->request->post('_action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPresensisiswa', ['row' => $row]);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
