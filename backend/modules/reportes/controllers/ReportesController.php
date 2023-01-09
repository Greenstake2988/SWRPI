<?php

namespace backend\modules\reportes\controllers;

use backend\modules\reportes\models\Reportes;
use backend\modules\reportes\models\ReportesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use components\menu;
/**
 * ReportesController implements the CRUD actions for Reportes model.
 */
class ReportesController extends Controller
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
     * Lists all Reportes models.
     * @return mixed
     */
    public  function actionVerificar(){

        $id=yii::$app->request->get('id');

        $searchModel = new ReportesSearch();
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
        $opciones = new menu();
        $menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
        $this->view->params['menuItems'] = $menuItems;

        $searchModel = new ReportesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Reportes model.
     * @param int $idreportes Idreportes
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
     * Crears a new Reportes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Reportes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idreportes]);
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
     * Actualizars an existing Reportes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idreportes Idreportes
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idreportes]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Reportes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idreportes Idreportes
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/proyectosinternos/proyectosinternos/index']);
    }

    /**
     * Finds the Reportes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idreportes Idreportes
     * @return Reportes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Reportes::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
