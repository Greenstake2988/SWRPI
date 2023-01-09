<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\entregablemeta\models\Entregablemeta */

$this->title = $model->identregablemeta;
$this->params['breadcrumbs'][] = ['label' => 'Entregablemetas', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="entregablemeta-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->identregablemeta], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->identregablemeta], [
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
            'identregablemeta',
            'tipo_entregable',
            'descripcion',
            'fecha_entrega',
            'observacion',
            'evidencia',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
