<?php

namespace backend\modules\proyectosinternos\controllers;

use backend\modules\proyectosinternos\models\Proyectosinternos;
use backend\modules\proyectosinternos\models\ProyectosinternosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use common\models\User;
use components\menu;
use backend\modules\colaborador\models\ColaboradorSearch;
/**
 * ProyectosinternosController implements the CRUD actions for Proyectosinternos model.
 */
class ProyectosinternosController extends Controller
{
    /**
     * @inheritDoc
     */
    
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index','create','update','view'],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                            // everything else is denied
                        ],
                    ],            
        ];
    }
    /**
     * Lists all Proyectosinternos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $opciones = new menu();
        $menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
        $this->view->params['menuItems'] = $menuItems;
        
        $searchModel = new ProyectosinternosSearch();
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
     * Displays a single Proyectosinternos model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $searchModel = new ColaboradorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->andwhere(['proyectosinternos_id'=>$id]);
        //var_dump($dataProvider);exit();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'Colaboradores' => $dataProvider,

        ]);
    }

    /**
     * Crears a new Proyectosinternos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proyectosinternos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
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
     * Actualizars an existing Proyectosinternos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Proyectosinternos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Proyectosinternos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Proyectosinternos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proyectosinternos::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
