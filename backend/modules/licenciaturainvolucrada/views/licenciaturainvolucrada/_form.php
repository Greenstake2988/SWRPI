<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="licenciaturainvolucrada-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clave_licenciatura')->textInput() ?>

    <?= $form->field($model, 'nombre_licenciatura')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
