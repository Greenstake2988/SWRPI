<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\perfil\models\PerfilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idperfil') ?>

    <?= $form->field($model, 'nombre_perfil') ?>

    <?= $form->field($model, 'apellido_perfil') ?>

    <?= $form->field($model, 'genero_perfil') ?>

    <?= $form->field($model, 'ingenieria_perfil') ?>

    <?php // echo $form->field($model, 'SNI') ?>

    <?php // echo $form->field($model, 'promep_perfil') ?>

    <?php // echo $form->field($model, 'tc_perfil') ?>

    <?php // echo $form->field($model, 'idgradoacademico') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
