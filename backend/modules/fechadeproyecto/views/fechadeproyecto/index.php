<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\fechadeproyecto\models\FechadeproyectoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fecha de proyectos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fechadeproyecto-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Fecha de proyecto', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idfechadeproyecto',
            'fecha_registro',
            'fecha_inicio',
            'fecha_terminacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
