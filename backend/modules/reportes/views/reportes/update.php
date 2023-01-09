<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\reportes\models\Reportes */

$this->title = 'Actualizar Reportes: ' . $model->idreportes;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = ['label' => $model->idreportes];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="reportes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
