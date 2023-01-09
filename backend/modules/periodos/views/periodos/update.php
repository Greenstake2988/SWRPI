<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\periodos\models\Periodos */

$this->title = 'Actualizar Periodos: ' . $model->idperiodos;
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idperiodos, 'url' => ['view', 'idperiodos' => $model->idperiodos]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="periodos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
