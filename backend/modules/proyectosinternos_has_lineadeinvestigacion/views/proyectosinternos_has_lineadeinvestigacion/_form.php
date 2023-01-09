<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos_has_lineadeinvestigacion\models\Proyectosinternos_has_lineadeinvestigacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosinternos-has-lineadeinvestigacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lineadeinvestigacion_idlineadeinvestigacion')->textInput() ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
