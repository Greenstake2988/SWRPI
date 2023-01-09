<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion */

$this->title = 'Actualizar Lineadeinvestigacion: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Linea de Investigacion', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="lineadeinvestigacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
