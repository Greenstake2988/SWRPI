<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\licenciaturainvolucrada\models\LicenciaturainvolucradaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="licenciaturainvolucrada-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'clave_licenciatura') ?>

    <?= $form->field($model, 'nombre_licenciatura') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
