<?php

namespace backend\modules\periodos\controllers;

use backend\modules\periodos\models\Periodos;
use backend\modules\periodos\models\PeriodosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use common\models\User;
use components\menu;

/**
 * PeriodosController implements the CRUD actions for Periodos model.
 */
class PeriodosController extends Controller
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
     * Lists all Periodos models.
     * @return mixed
     */
    public function actionIndex()
    {
	 $opciones = new menu();
 	$menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
	 $this->view->params['menuItems'] = $menuItems;

        $searchModel = new PeriodosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Periodos model.
     * @param int $idperiodos Idperiodos
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
     * Crears a new Periodos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Periodos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idperiodos]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Actualizars an existing Periodos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idperiodos Idperiodos
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idperiodos]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Periodos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idperiodos Idperiodos
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($idperiodos)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Periodos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idperiodos Idperiodos
     * @return Periodos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Periodos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
