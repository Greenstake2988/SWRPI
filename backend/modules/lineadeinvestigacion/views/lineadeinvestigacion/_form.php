<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lineadeinvestigacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clave_linea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_linea')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
