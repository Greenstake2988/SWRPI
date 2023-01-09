<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\perfil\models\Perfil */

$this->title = 'Actualizar Perfil: ' . $model->idperfil;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idperfil];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
