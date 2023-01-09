<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\reportes\models\Reportes */

$this->title = $model->idreportes;
$this->params['breadcrumbs'][] = ['label' => 'Reportes', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reportes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idreportes], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idreportes], [
            'class' => 'btn btn-outline-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idreportes',
            'avance_reporte',
            'actividad_reporte',
            'anexo_reporte',
            'conclusion_reporte',
            'observacion_reporte',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
