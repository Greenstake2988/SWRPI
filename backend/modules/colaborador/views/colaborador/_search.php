<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\colaborador\models\ColaboradorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colaborador-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'iddocente') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'tiempocompleto') ?>

    <?= $form->field($model, 'nivelSNI') ?>

    <?= $form->field($model, 'perfilpromep') ?>

    <?php // echo $form->field($model, 'proyectosinternos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
