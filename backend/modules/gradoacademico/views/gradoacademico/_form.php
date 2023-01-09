<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\gradoacademico\models\Gradoacademico;

/* @var $this yii\web\View */
/* @var $model backend\modules\gradoacademico\models\Gradoacademico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gradoacademico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idgradoacademico')->textInput() ?>

    <?= $form->field($model, 'nombre_de_grado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sigla_de_grado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
