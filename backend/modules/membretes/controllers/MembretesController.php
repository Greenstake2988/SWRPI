<?php

namespace backend\modules\membretes\controllers;

use backend\modules\membretes\models\Membretes;
use backend\modules\membretes\models\MembretesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use\yii\web\UploadedFile;
use yii;
use common\models\User;
use components\menu;


/**
 * MembretesController implements the CRUD actions for Membretes model.
 */
class MembretesController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Membretes models.
     * @return mixed
     */
    public function actionIndex()
    {
	$opciones = new menu();
 	$menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
 	$this->view->params['menuItems'] = $menuItems;

        $searchModel = new MembretesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Membretes model.
     * @param int $idmembretes Idmembretes
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Crears a new Membretes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
       $model = new Membretes();
        $this->subirMembrete($model);

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Actualizars an existing Membretes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idmembretes Idmembretes
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $this->subirMembrete($model);

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Membretes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idmembretes Idmembretes
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);

        if (file_exists($model->superior_membrete)) {
            unlink($model->superior_membrete);
            $model->delete();
        }
    
        

        if (file_exists($model->inferior_membrete)) {
             unlink($model->inferior_membrete);
             $model->delete();
        }
    
        

        return $this->redirect(['index']);
    }

    /**
     * Finds the Membretes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idmembretes Idmembretes
     * @return Membretes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Membretes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function subirMembrete(Membretes $model){
   
              if ($model->load($this->request->post()) ) {

                $model->archivoS= UploadedFile::getInstance($model,'archivoS');
                $model->archivoI= UploadedFile::getInstance($model,'archivoI');
               
                if($model->validate())
                {
                    if ($model->archivoS) {

                         if (file_exists($model->superior_membrete)) {
                          unlink($model->superior_membrete);
                        }
    
                   
                        $rutaArchivoS='uploads/'.time()."_".$model->archivoS->baseName.".".$model->archivoS->extension;
                        if ($model->archivoS->saveAs($rutaArchivoS)) {
                            $model->superior_membrete=$rutaArchivoS;
                        }
                    }
                    if ($model->archivoI) {
                         if (file_exists($model->inferior_membrete)) {
                          unlink($model->inferior_membrete);
                        }
                   
                        $rutaArchivoI='uploads/'.time()."_".$model->archivoI->baseName.".".$model->archivoI->extension;
                        if ($model->archivoI->saveAs($rutaArchivoI)) {
                            $model->inferior_membrete=$rutaArchivoI;
                        }
                    }
                }


                if($model->save(false)){
                      return $this->redirect(['index']);
                }

              
            }
        }
        
}

