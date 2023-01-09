<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_lineadeinvestigacion\models\Proyectosinternos_has_lineadeinvestigacion */

$this->title = 'Crear Proyectosinternos Has Lineadeinvestigacion';
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos Has Lineadeinvestigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proyectosinternos-has-lineadeinvestigacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
