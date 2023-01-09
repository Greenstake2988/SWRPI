<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\licenciaturainvolucrada\models\LicenciaturainvolucradaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Licenciatura Involucradas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="licenciaturainvolucrada-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Licenciatura Involucrada', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'clave_licenciatura',
            'nombre_licenciatura',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
