<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gradoacademico\models\Gradoacademico */

$this->title = 'Actualizar Grado academico: ' . $model->idgradoacademico;
$this->params['breadcrumbs'][] = ['label' => 'Grado Academico', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idgradoacademico, 'url' => ['view', 'idgradoacademico' => $model->idgradoacademico]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="gradoacademico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
