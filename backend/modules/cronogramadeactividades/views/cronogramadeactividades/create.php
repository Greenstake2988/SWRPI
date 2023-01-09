<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\cronogramadeactividades\models\Cronogramadeactividades */

$this->title = 'Crear Cronogramadeactividades';
$this->params['breadcrumbs'][] = ['label' => 'Cronogramadeactividades','url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cronogramadeactividades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
