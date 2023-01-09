<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           'id',
            'username',
            'email:email',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            //'status',
            'created_at:DateTime',
            //'updated_at',
            //'verification_token',
            [
            'attribute'=>'rol_id',
             'value'=>'rol.tipo_rol',
             'format'=>'raw',
             'label'=>'Rol del Usuario'
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
