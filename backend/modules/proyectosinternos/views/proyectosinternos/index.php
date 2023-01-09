<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\proyectosinternos\models\ProyectosinternosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectos internos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosinternos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Proyectos internos', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'titulo_proyecto',
            'tipo_investigacion_proyecto',
            'area_de_desarrollo',
          // 'descripcion_proyecto:ntext',
            'duracion_proyecto',
            
            [
            'attribute'=>'user_id',
             'value'=>'user.email',
             'format'=>'raw',
             'label'=>'Creado por el Usuario'
            ],
            //'institucion_apoyoeconomico',
            //'resumen_proyecto:ntext',
            //'introduccion_proyecto:ntext',
            //'estado_arte_proyecto',
            //'objetivo_general_proyecto:ntext',
            //'objetivo_especifico_proyecto:ntext',
            //'periodos_idperiodos',
            //'membretes_idmembretes',
            //'impactos_proyecto:ntext',
            //'metodologia_proyecto:ntext',
            //'vinculacion_sector_proyecto',
            //'referencias_proyecto',
            //'lugar_desarrollo_proyecto',
            //'infraestructura_proyecto:ntext',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
