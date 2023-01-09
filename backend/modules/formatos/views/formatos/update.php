<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\formatos\models\Formatos */

$this->title = 'Actualizar Formatos: ' . $model->idformatos;
$this->params['breadcrumbs'][] = ['label' => 'Formatos','url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = ['label' => $model->idformatos];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="formatos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
