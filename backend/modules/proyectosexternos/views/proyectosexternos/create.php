<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosexternos\models\Proyectosexternos */

$this->title = 'Crear Proyectosexternos';
$this->params['breadcrumbs'][] = ['label' => 'Proyectosexternos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosexternos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
