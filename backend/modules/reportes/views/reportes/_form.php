<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\reportes\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'avance_reporte')->textInput(['placeholder' => "Avance Reporte, escriba el porcentaje"]) ?>

    <?= $form->field($model, 'actividad_reporte')->textInput(['placeholder' => "Actividad"]) ?>
    <?= $form->field($model, 'anexo_reporte')->textInput(['placeholder' => "Anexo para el Reporte (Link o url)"]) ?>

    <?= $form->field($model, 'conclusion_reporte')->textInput(['placeholder' => "Conclusion "]) ?>

    <?= $form->field($model, 'observacion_reporte')->textInput(['placeholder' => "Observacion realizada"]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
