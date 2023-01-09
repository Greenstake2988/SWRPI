<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\fechadeproyecto\models\Fechadeproyecto */

$this->title = $model->idfechadeproyecto;
$this->params['breadcrumbs'][] = ['label' => 'Fechadeproyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="fechadeproyecto-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idfechadeproyecto], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idfechadeproyecto], [
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
            'idfechadeproyecto',
            'fecha_registro',
            'fecha_inicio',
            'fecha_terminacion',
        ],
    ]) ?>

</div>
