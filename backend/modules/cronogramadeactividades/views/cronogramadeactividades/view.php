<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\cronogramadeactividades\models\Cronogramadeactividades */

$this->title = $model->idcronogramadeactividades;
$this->params['breadcrumbs'][] = ['label' => 'Cronogramadeactividades', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cronogramadeactividades-view">

    <h1><?= Html::encode($this->title) ?></h1>
     <p>
        
        <?= Html::a('Volver', ['verificar', 'id' => $model->proyectosinternos_id ], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idcronogramadeactividades], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idcronogramadeactividades], [
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
            'idcronogramadeactividades',
            'actividad:ntext',
            'fecha_de_realizacion',
            'entregables:ntext',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
