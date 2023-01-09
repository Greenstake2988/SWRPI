<?php

namespace backend\modules\colaborador\controllers;

use backend\modules\colaborador\models\Colaborador;
use backend\modules\colaborador\models\ColaboradorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use components\menu;
/**
 * ColaboradorController implements the CRUD actions for Colaborador model.
 */
class ColaboradorController extends Controller
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
     * Lists all Colaborador models.
     * @return mixed
     */
    public  function actionVerificar(){

        $id=yii::$app->request->get('id');

        $searchModel = new ColaboradorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->andwhere(['proyectosinternos_id'=>$id]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'proyectosinternos_id' => $id,
        ]);

    }
    public function actionIndex()
    {
        
       
        $proyectosinternos_id=yii::$app->request->get('proyectosinternos_id');
        //var_dump($proyectosinternos_id);exit();
        $searchModel = new ColaboradorSearch();
       if(yii::$app->user->identity->id){
            if(isset($proyectosinternos_id)){
                $searchModel->proyectosinternos_id = $proyectosinternos_id;
              }else{
              $searchModel->proyectosinternos_id;

            }
        }
        //var_dump($proyectosinternos_id);exit();
        $dataProvider = $searchModel->search($this->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'proyectosinternos_id' => $proyectosinternos_id,
          
        ]);
    }

    /**
     * Displays a single Colaborador model.
     * @param int $iddocente Iddocente
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
     * Crears a new Colaborador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Colaborador();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->iddocente]);
            }
        } else {
            $model->loadDefaultValues();
        }

        $model->proyectosinternos_id=yii::$app->request->get('proyectosinternos_id');

        return $this->render('create', [
            'model' => $model,

        ]);
    }

    /**
     * Actualizars an existing Colaborador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $iddocente Iddocente
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->iddocente]);
        }

        return $this->render('update', [
            'model' => $model,
            'proyectosinternos_id' => $proyectosinternos_id,
        ]);
    }

    /**
     * Eliminars an existing Colaborador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $iddocente Iddocente
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {   
        $proyectosinternos_id=yii::$app->request->post('proyectosinternos_id');
        
        $this->findModel($id)->delete();
         
        //var_dump($proyectosinternos_id);exit();
       return $this->redirect(['/proyectosinternos/proyectosinternos/index']);

    }

    /**
     * Finds the Colaborador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $iddocente Iddocente
     * @return Colaborador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Colaborador::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
