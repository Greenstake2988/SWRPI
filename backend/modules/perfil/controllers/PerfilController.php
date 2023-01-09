<?php

namespace backend\modules\perfil\controllers;

use backend\modules\perfil\models\Perfil;
use backend\modules\perfil\models\PerfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii;
use components\menu;
/**
 * PerfilController implements the CRUD actions for Perfil model.
 */
class PerfilController extends Controller
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
     * Lists all Perfil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $opciones = new menu();
        $menuItems = $opciones->Creamenu(yii::$app->user->identity->rol_id);  
        $this->view->params['menuItems'] = $menuItems;
        
       
        $searchModel = new PerfilSearch();
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
     * Displays a single Perfil model.
     * @param int $idperfil Idperfil
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
     * Crears a new Perfil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perfil();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->idperfil]);
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
     * Actualizars an existing Perfil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idperfil Idperfil
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idperfil]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Eliminars an existing Perfil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idperfil Idperfil
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Perfil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idperfil Idperfil
     * @return Perfil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perfil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
