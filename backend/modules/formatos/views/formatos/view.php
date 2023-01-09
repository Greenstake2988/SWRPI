<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\formatos\models\Formatos */

$this->title = $model->idformatos;
$this->params['breadcrumbs'][] = ['label' => 'Formatos','url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="formatos-view">

    <h1><?= Html::encode($this->title) ?></h1>

 

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idformatos], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idformatos], [
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
            'idformatos',
 		[	
		'attribute' => 'primer_reporte',
                'format' => 'url',
        	],
            	[	
		'attribute' => 'segundo_reporte',
                'format' => 'url',
        	],
		[	
		'attribute' => 'tercer_reporte',
                'format' => 'url',
        	],
		[	
		'attribute' => 'protocolo',
                'format' => 'url',
        	],
            	[	
		'attribute' => 'concentrador',
                'format' => 'url',
        	],
		[	
		'attribute' => 'registro_plantrabajo',
                'format' => 'url',
        	],
            //'segundo_reporte:ntext',
            //'tercer_reporte:ntext',
            //'protocolo:ntext',
            //'concentrador:ntext',
            //'registro_plantrabajo:ntext',
            'proyectosinternos_id',
        ],
    ]) ?>

</div>
