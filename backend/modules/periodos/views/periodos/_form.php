<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\periodos\models\Periodos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fechadeproyecto_idfechadeproyecto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
