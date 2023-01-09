<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\formatos\models\Formatos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="formatos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'primer_reporte')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'segundo_reporte')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tercer_reporte')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'protocolo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'concentrador')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'registro_plantrabajo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
