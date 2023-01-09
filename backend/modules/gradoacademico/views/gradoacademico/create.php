<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gradoacademico\models\Gradoacademico */

$this->title = 'Crear Grado academico';
$this->params['breadcrumbs'][] = ['label' => 'Grado Academico', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradoacademico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
