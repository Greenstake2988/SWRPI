<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucrada */

$this->title = 'Actualizar Proyectosinternos Has Licenciaturainvolucrada: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos Has Licenciaturainvolucradas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proyectosinternos-has-licenciaturainvolucrada-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
