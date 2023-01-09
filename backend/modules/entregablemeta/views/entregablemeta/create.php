<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\entregablemeta\models\Entregablemeta */

$this->title = 'Crear Entregablemeta';
$this->params['breadcrumbs'][] = ['label' => 'Entregablemetas','url' => ['verificar', 'id' => $model->proyectosinternos_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entregablemeta-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
