<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\formatos\models\FormatosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formatos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idformatos') ?>

    <?= $form->field($model, 'primer_reporte') ?>

    <?= $form->field($model, 'segundo_reporte') ?>

    <?= $form->field($model, 'tercer_reporte') ?>

    <?= $form->field($model, 'protocolo') ?>

    <?php // echo $form->field($model, 'concentrador') ?>

    <?php // echo $form->field($model, 'registro_plantrabajo') ?>

    <?php // echo $form->field($model, 'proyectosinternos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
