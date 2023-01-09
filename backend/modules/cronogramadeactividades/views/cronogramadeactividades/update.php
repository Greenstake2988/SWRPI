<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\cronogramadeactividades\models\Cronogramadeactividades */

$this->title = 'Actualizar Cronograma de Actividades: ' . $model->idcronogramadeactividades;
$this->params['breadcrumbs'][] = ['label' => 'Cronograma de actividades', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = ['label' => $model->idcronogramadeactividades];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cronogramadeactividades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
