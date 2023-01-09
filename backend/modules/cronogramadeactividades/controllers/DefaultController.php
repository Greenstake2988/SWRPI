<?php

namespace backend\modules\cronogramadeactividades\controllers;

use yii\web\Controller;

/**
 * Default controller for the `cronogramadeactividades` module
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
