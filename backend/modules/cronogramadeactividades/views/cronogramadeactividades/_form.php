<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\cronogramadeactividades\models\Cronogramadeactividades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cronogramadeactividades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'actividad')->textarea(['rows' => 6,'placeholder' => "Actividad"]) ?>

    <?= $form->field($model, 'fecha_de_realizacion')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'entregables')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
