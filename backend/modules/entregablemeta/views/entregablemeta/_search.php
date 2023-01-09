<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\entregablemeta\models\EntregablemetaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entregablemeta-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'identregablemeta') ?>

    <?= $form->field($model, 'tipo_entregable') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha_entrega') ?>

    <?= $form->field($model, 'observacion') ?>

    <?php // echo $form->field($model, 'evidencia') ?>

    <?php // echo $form->field($model, 'proyectosinternos_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
