<?php

namespace backend\modules\proyectosexternos\controllers;

use backend\modules\proyectosexternos\models\Proyectosexternos;
use backend\modules\proyectosexternos\models\ProyectosexternosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use components\menu;
/**
 * ProyectosexternosController implements the CRUD actions for Proyectosexternos model.
 */
class ProyectosexternosController extends Controller
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
     * Lists all Proyectosexternos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $opciones = new menu();
        $menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
        $this->view->params['menuItems'] = $menuItems;
        
        $searchModel = new ProyectosexternosSearch();
        if(yii::$app->user->identity->rol_id !=1){
            $searchModel->user_id=yii::$app->user->identity->id;
        }
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Proyectosexternos model.
     * @param int $idproyectosexternos Idproyectosexternos
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
     * Crears a new Proyectosexternos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proyectosexternos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idproyectosexternos]);
            }
        } else {
            $model->loadDefaultValues();
        }
        $model->user_id=yii::$app->user->identity->id;

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Actualizars an existing Proyectosexternos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idproyectosexternos Idproyectosexternos
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idproyectosexternos]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Proyectosexternos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idproyectosexternos Idproyectosexternos
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Proyectosexternos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idproyectosexternos Idproyectosexternos
     * @return Proyectosexternos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proyectosexternos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
