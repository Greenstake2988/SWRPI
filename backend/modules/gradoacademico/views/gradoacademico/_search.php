<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\gradoacademico\models\GradoacademicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gradoacademico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idgradoacademico') ?>

    <?= $form->field($model, 'nombre_de_grado') ?>

    <?= $form->field($model, 'sigla_de_grado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
