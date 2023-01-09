<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos\models\ProyectosinternosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosinternos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= // echo $form->field($model, 'id') ?>

    <?= //$form->field($model, 'titulo_proyecto') ?>

    <?= //$form->field($model, 'tipo_investigacion_proyecto') ?>

    <?= //$form->field($model, 'area_de_desarrollo') ?>

    <?= //$form->field($model, 'descripcion_proyecto') ?>

    <?php // echo $form->field($model, 'duracion_proyecto') ?>

    <?php // echo $form->field($model, 'institucion_apoyoeconomico') ?>

    <?php // echo $form->field($model, 'resumen_proyecto') ?>

    <?php // echo $form->field($model, 'introduccion_proyecto') ?>

    <?php // echo $form->field($model, 'estado_arte_proyecto') ?>

    <?php // echo $form->field($model, 'objetivo_general_proyecto') ?>

    <?php // echo $form->field($model, 'objetivo_especifico_proyecto') ?>

    <?php // echo $form->field($model, 'periodos_idperiodos') ?>

    <?php // echo $form->field($model, 'membretes_idmembretes') ?>

    <?php // echo $form->field($model, 'impactos_proyecto') ?>

    <?php // echo $form->field($model, 'metodologia_proyecto') ?>

    <?php // echo $form->field($model, 'vinculacion_sector_proyecto') ?>

    <?php // echo $form->field($model, 'referencias_proyecto') ?>

    <?php // echo $form->field($model, 'lugar_desarrollo_proyecto') ?>

    <?php // echo $form->field($model, 'infraestructura_proyecto') ?>

    <?php  echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
