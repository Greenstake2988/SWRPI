<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_lineadeinvestigacion\models\Proyectosinternos_has_lineadeinvestigacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos Has Lineadeinvestigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proyectosinternos-has-lineadeinvestigacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
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
            'id',
            'lineadeinvestigacion_idlineadeinvestigacion',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
