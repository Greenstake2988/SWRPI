<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\membretes\models\Membretes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="membretes-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= Html::img($model->superior_membrete,['width'=>'100px'] ); ?>

    <?= $form->field($model, 'archivoS')->fileInput() ?>

    <?= Html::img($model->inferior_membrete,['width'=>'300px'] ); ?>

    <?= $form->field($model, 'archivoI')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
