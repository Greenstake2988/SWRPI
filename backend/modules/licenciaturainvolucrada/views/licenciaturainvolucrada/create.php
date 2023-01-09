<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada */

$this->title = 'Crear Licenciatura Involucrada';
$this->params['breadcrumbs'][] = ['label' => 'Licenciaturainvolucradas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="licenciaturainvolucrada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
