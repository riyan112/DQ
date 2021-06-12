<?php

namespace app\controllers;

use Yii;
use app\models\Filezip;
use app\models\FilezipSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use ZipArchive;

/**
 * FilezipController implements the CRUD actions for Filezip model.
 */
class FilezipController extends Controller
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
     * Lists all Filezip models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FilezipSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Filezip model.
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
     * Creates a new Filezip model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    /*{
        $model = new Filezip(['scenario' => 'create']);
        $filezip_id = \app\models\Filezip::find()->where(['filezip_id' => $model])->one();
        if (isset($_POST["btn_zip"])) {
            $output = '';
            if ($model['namafilezip'] != '') {
                $file_name = $_FILE['namafilezip'];
                $array = explode(".", $file_name);
                $name = $array[0];
                $ext = $array[1];
                if ($ext == 'zip') {
                    $path = 'img_fotosiswa/';
                    if (!file_exists($path))
                        mkdir($path);

                    $location = $path . $file_name;
                    if (move_uploaded_file($_FILE['namafilezip'], $location)) {
                        $zip = new ZipArchive;
                        if ($zip->open($location)) {
                            $zip->extractTo($path);
                            $zip->close();
                        }
                        unlink($location);

                        echo "<script>alert('Data berhasil diupload'); location='index.php';</script>";
                    }
                } else {
                    echo "<script>alert('Hanya .zip yang diperbolehkan'); location='index.php';</script>";
                }
            }
        }
    }*/

    {
        

        $model = new Filezip(['scenario' => 'create']);
        $filezip_id = \app\models\Filezip::find()->where(['filezip_id' => $model])->one();
        if ($model->load(Yii::$app->request->post())) {
        try {
            
            $berkaszip = UploadedFile::getInstance($model, 'namafilezip');

            
            $filename = $model->getPrimaryKey();
            $model->namafilezip = $berkaszip->name;
            $model->ukuran = $berkaszip->size;
            if ($model->save(false)) {
                $filename = $model->getPrimaryKey();
                // ambil id yg increment dari filesiswa_id

                

                $berkaszip->saveAs('img_fotosiswa/' . $filename . '.zip');
                // simpan file ke folder "filesiswa/" dengan nama sesuai id incrementnya

                //$qry = "update filesiswa set tgl_upload=now() where filesiswa_id='$filename'";
                //$db->createCommand($qry)->execute();

                $zip = new ZipArchive;
               
                $archive = 'img_fotosiswa/'.$filename.'.zip';
                $destination = 'img_fotosiswa/';
                if($zip->open($archive) === TRUE){
            // Check if destination is writable
            if(is_writeable($destination)){
                $zip->extractTo($destination);
                $zip->close();
                $GLOBALS['status'] = ['success' => 'Files unzipped successfully'];
                return $this->redirect(['view', 'id' => $model->filezip_id]);
            }else{
                $GLOBALS['status'] = array('error' => 'Directory not writeable by webserver.');
                return false;
            }
        }else{
            $GLOBALS['status'] = array('error' => 'Cannot read .zip archive.');
            return false;
        }

                Yii::$app->getSession()->setFlash('success', 'File telah diupload');
                return $this->redirect(['view', 'id' => $model->filezip_id]);
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
        $model = new Filezip();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->filezip_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Updates an existing Filezip model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->filezip_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Filezip model.
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
     * Finds the Filezip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Filezip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Filezip::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
