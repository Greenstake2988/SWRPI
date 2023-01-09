<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucrada */

$this->title = 'Crear Proyectosinternos Has Licenciaturainvolucrada';
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos Has Licenciaturainvolucradas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosinternos-has-licenciaturainvolucrada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
