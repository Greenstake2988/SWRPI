<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion */

$this->title = 'Crear Linea de Investigacion';
$this->params['breadcrumbs'][] = ['label' => 'Linea de Investigacion', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lineadeinvestigacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
