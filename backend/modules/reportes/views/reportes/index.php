<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\reportes\models\ReportesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reportes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reportes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Volver', ['/proyectosinternos/proyectosinternos/view','id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-dark']) ?>
    </p>


    <p>
        <?= Html::a('Crear Reportes', ['create','proyectosinternos_id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idreportes',
            'avance_reporte',
            'actividad_reporte',
            'anexo_reporte',
            'conclusion_reporte',
            //'observacion_reporte',
            //'proyectosinternos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
