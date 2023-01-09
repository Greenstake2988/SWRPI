<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\colaborador\models\Colaborador */

$this->title = 'Actualizar Colaborador: ' . $model->iddocente;
$this->params['breadcrumbs'][] = ['label' => 'Colaborador', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = ['label' => $model->iddocente];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="colaborador-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
