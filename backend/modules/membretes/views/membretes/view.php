<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\membretes\models\Membretes */

$this->title = $model->idmembretes;
$this->params['breadcrumbs'][] = ['label' => 'Membretes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="membretes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idmembretes], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idmembretes], [
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
            'idmembretes',
            'superior_membrete',
            'inferior_membrete',
        ],
    ]) ?>

</div>
