<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\membretes\models\Membretes */

$this->title = 'Actualizar Membretes: ' . $model->idmembretes;
$this->params['breadcrumbs'][] = ['label' => 'Membretes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmembretes, 'url' => ['view', 'id' => $model->idmembretes]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="membretes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
