<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\colaborador\models\Colaborador */

$this->title = 'Crear Colaborador';
$this->params['breadcrumbs'][] = ['label' => 'Colaborador','url' => ['verificar', 'id' => $model->proyectosinternos_id]];
//'proyectosinternos_id'=> $proyectosinternos_id
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colaborador-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
