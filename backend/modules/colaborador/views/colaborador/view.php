<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\colaborador\models\Colaborador */

$this->title = $model->iddocente;
$this->params['breadcrumbs'][] = ['label' => 'Colaborador', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="colaborador-view">

    <h1><?= Html::encode($this->title) ?></h1>

   
    
    <p>   
        <?= Html::a('Actualizar', ['update', 'id' => $model->iddocente], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->iddocente], [
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
            'iddocente',
            'nombre:ntext',
            'tiempocompleto',
            'nivelSNI',
            'perfilpromep',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
