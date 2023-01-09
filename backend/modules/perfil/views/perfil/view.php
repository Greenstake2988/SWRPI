<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\perfil\models\Perfil */
$this->title = Yii::t('app', '{nombre_perfil} {apellido_perfil}', [
    'nombre' => $model->nombre_perfil,
    'apellido' => $model->apellido_perfil,
]);

$this->title = $model->idperfil;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perfil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idperfil], ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->idperfil], [
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
            'idperfil',
            'nombre_perfil',
            'apellido_perfil',
            'genero_perfil',
            'ingenieria_perfil',
            'SNI',
            'promep_perfil',
            'tc_perfil',
            'idgradoacademico',
            'user_id',
        ],
    ]) ?>

</div>
