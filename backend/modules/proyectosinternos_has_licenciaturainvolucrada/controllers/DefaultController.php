<?php

namespace backend\modules\proyectosinternos_has_licenciaturainvolucrada\controllers;

use yii\web\Controller;

/**
 * Default controller for the `proyectosinternos_has_licenciaturainvolucrada` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
