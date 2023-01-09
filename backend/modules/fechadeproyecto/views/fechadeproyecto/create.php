<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\fechadeproyecto\models\Fechadeproyecto */

$this->title = 'Crear Fechadeproyecto';
$this->params['breadcrumbs'][] = ['label' => 'Fechadeproyectos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fechadeproyecto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
