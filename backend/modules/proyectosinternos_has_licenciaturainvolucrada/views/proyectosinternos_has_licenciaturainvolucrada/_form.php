<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_licenciaturainvolucrada\models\Proyectosinternos_has_licenciaturainvolucrada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosinternos-has-licenciaturainvolucrada-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'licenciaturainvolucrada_idlicenciaturainvolucrada')->textInput() ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
