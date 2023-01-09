<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\proyectosexternos\models\ProyectosexternosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos externos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosexternos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Proyectos externos', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'idproyectosexternos',
            'nombre_proyectos_externos',
            [
            'attribute'=>'evidencia',
             'value'=>'evidencia',
             'format'=>'url',
             'label'=>'Enlace de evidencia'
            ],
            'observaciones',
            [
            'attribute'=>'user_id',
             'value'=>'user.email',
             'format'=>'raw',
             'label'=>'Creado por el Usuario'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
