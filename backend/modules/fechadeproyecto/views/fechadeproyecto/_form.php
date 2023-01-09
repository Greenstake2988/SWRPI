<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\fechadeproyecto\models\Fechadeproyecto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fechadeproyecto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_registro')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'fecha_inicio')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'fecha_terminacion')->textInput(['type' => 'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
