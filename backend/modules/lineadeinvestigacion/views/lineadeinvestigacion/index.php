<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\lineadeinvestigacion\models\LineadeinvestigacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Linea de investigacion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lineadeinvestigacion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Linea de investigacion', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'clave_linea',
            'nombre_linea',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
