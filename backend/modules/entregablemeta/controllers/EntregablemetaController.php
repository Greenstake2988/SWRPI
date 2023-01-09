<?php

namespace backend\modules\entregablemeta\controllers;

use backend\modules\entregablemeta\models\Entregablemeta;
use backend\modules\entregablemeta\models\EntregablemetaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use components\menu;
/**
 * EntregablemetaController implements the CRUD actions for Entregablemeta model.
 */
class EntregablemetaController extends Controller
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
     * Lists all Entregablemeta models.
     * @return mixed
     */

    public  function actionVerificar(){

        $id=yii::$app->request->get('id');

        $searchModel = new EntregablemetaSearch();
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
        

        $searchModel = new EntregablemetaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Entregablemeta model.
     * @param int $identregablemeta Identregablemeta
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
     * Crears a new Entregablemeta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Entregablemeta();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->identregablemeta]);
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
     * Actualizars an existing Entregablemeta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $identregablemeta Identregablemeta
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->identregablemeta]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Entregablemeta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $identregablemeta Identregablemeta
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/proyectosinternos/proyectosinternos/index']);
    }

    /**
     * Finds the Entregablemeta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $identregablemeta Identregablemeta
     * @return Entregablemeta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Entregablemeta::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
