<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\colaborador\models\ColaboradorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colaborador';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colaborador-index">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Volver', ['/proyectosinternos/proyectosinternos/view','id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-dark']) ?>
    </p>

    
    <p>
        <?= Html::a('Crear Colaborador', ['create','proyectosinternos_id'=> $proyectosinternos_id], ['class' => 'btn btn-outline-success']) ?>

        
    </p>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iddocente',
            'nombre:ntext',
            //'tiempocompleto',
            //'nivelSNI',
            //'perfilpromep',
            //'proyectosinternos.titulo_proyecto',
            [
                'attribute' => 'proyectosinternos_id',
                'value' => 'proyectosinternos.titulo_proyecto',
                'format' => 'raw',
                //'label' => 'Titulo del Proyecto',

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
