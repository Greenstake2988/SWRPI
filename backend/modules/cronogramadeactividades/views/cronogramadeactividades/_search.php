<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\cronogramadeactividades\models\CronogramadeactividadesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cronogramadeactividades-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcronogramadeactividades') ?>

    <?= $form->field($model, 'actividad') ?>

    <?= $form->field($model, 'fecha_de_realizacion') ?>

    <?= $form->field($model, 'entregables') ?>

    <?= $form->field($model, 'proyectosinternos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
