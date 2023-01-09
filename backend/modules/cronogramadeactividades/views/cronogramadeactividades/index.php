<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\cronogramadeactividades\models\CronogramadeactividadesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cronograma de actividades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronogramadeactividades-index">

    <h1><?= Html::encode($this->title) ?></h1>
     <p>
        <?= Html::a('Volver', ['/proyectosinternos/proyectosinternos/view','id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-dark']) ?>
    </p>

    <p>
        <?= Html::a('Crear Cronograma de actividades', ['create','proyectosinternos_id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcronogramadeactividades',
            'actividad:ntext',
            'fecha_de_realizacion',
            'entregables:ntext',
            'proyectosinternos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
