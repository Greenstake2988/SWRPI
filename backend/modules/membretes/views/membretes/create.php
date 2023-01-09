<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\membretes\models\Membretes */

$this->title = 'Crear Membretes';
$this->params['breadcrumbs'][] = ['label' => 'Membretes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="membretes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
