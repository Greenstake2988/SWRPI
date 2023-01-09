<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_lineadeinvestigacion\models\Proyectosinternos_has_lineadeinvestigacion */

$this->title = 'Actualizar Proyectosinternos Has Lineadeinvestigacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos Has Lineadeinvestigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="proyectosinternos-has-lineadeinvestigacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
