<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosexternos\models\Proyectosexternos */

$this->title = 'Actualizar Proyectosexternos: ' . $model->idproyectosexternos;
$this->params['breadcrumbs'][] = ['label' => 'Proyectosexternos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idproyectosexternos, 'url' => ['view', 'idproyectosexternos' => $model->idproyectosexternos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proyectosexternos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
