<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\reportes\models\ReportesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idreportes') ?>

    <?= $form->field($model, 'avance_reporte') ?>

    <?= $form->field($model, 'actividad_reporte') ?>

    <?= $form->field($model, 'anexo_reporte') ?>

    <?= $form->field($model, 'conclusion_reporte') ?>

    <?php // echo $form->field($model, 'observacion_reporte') ?>

    <?php // echo $form->field($model, 'proyectosinternos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
