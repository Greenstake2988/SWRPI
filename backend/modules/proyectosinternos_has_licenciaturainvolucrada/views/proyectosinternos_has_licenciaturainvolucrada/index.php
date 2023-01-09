<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucradaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proyectosinternos Has Licenciaturainvolucradas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosinternos-has-licenciaturainvolucrada-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Proyectosinternos Has Licenciaturainvolucrada', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'licenciaturainvolucrada_idlicenciaturainvolucrada',
            'proyectosinternos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
