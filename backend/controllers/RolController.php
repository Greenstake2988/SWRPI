<?php

namespace backend\controllers;

use backend\modules\rol\models\Rol;
use backend\modules\rol\models\RolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RolController implements the CRUD actions for Rol model.
 */
class RolController extends Controller
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
     * Lists all Rol models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RolSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rol model.
     * @param int $idrol Idrol
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idrol)
    {
        return $this->render('view', [
            'model' => $this->findModel($idrol),
        ]);
    }

    /**
     * Creates a new Rol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Rol();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idrol' => $model->idrol]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idrol Idrol
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idrol)
    {
        $model = $this->findModel($idrol);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idrol' => $model->idrol]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rol model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idrol Idrol
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idrol)
    {
        $this->findModel($idrol)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Rol model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idrol Idrol
     * @return Rol the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idrol)
    {
        if (($model = Rol::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
