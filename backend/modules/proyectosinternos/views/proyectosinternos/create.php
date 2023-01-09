<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos\models\Proyectosinternos */

$this->title = 'Crear Proyectosinternos';
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosinternos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
