<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada */

$this->title = 'Actualizar Licenciatura Involucrada: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Licenciatura Involucrada', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="licenciaturainvolucrada-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
