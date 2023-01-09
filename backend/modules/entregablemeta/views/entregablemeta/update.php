<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\entregablemeta\models\Entregablemeta */

$this->title = 'Actualizar Entregablemeta: ' . $model->identregablemeta;
$this->params['breadcrumbs'][] = ['label' => 'Entregablemetas', 'url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = ['label' => $model->identregablemeta];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="entregablemeta-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
