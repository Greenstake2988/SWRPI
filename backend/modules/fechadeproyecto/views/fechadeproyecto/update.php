<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\fechadeproyecto\models\Fechadeproyecto */

$this->title = 'Actualizar Fechadeproyecto: ' . $model->idfechadeproyecto;
$this->params['breadcrumbs'][] = ['label' => 'Fechadeproyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idfechadeproyecto, 'url' => ['view', 'idfechadeproyecto' => $model->idfechadeproyecto]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="fechadeproyecto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
