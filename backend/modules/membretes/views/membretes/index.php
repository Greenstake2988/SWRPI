<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\membretes\models\MembretesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Membretes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membretes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Membretes', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idmembretes',
            ['format'=>'html',
            'value'=>function($data){return Html::img($data->superior_membrete,['width'=>'300px']);},],
            ['format'=>'html',
            'value'=>function($data){return Html::img($data->inferior_membrete,['width'=>'300px']);},],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
