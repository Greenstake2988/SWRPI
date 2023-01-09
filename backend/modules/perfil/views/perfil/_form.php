<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use backend\modules\gradoacademico\models\Gradoacademico;

/* @var $this yii\web\View */
/* @var $model backend\modules\perfil\models\Perfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_perfil')->textInput(['placeholder' => "Nombres"]) ?>

    <?= $form->field($model, 'apellido_perfil')->textInput(['placeholder' => "Apellidos"]) ?>

    <?= $form->field($model, 'genero_perfil')->dropDownList(['Masculino'=>'Masculino','Femenino'=>'Femenino','Otro'=>'Otro']) ?>

    <?= $form->field($model, 'ingenieria_perfil')->dropDownList(['Ingeniería en Sistemas Computacionales'=>'Ingenieria en Sistemas','Ingeniería Civil'=>'Ingenieria Civil','Ingeniería en Gestión de Negocios'=>'Ingenieria en Gestión de Negocios','Ingeniería Ambiental'=>'Ingenieria Ambiental','Ingeniería Industrial'=>'Ingenieria Industrial','Ingeniería en Administración'=>'Ingenieria en Administración',]) ?>

    <?= $form->field($model, 'SNI')->dropDownList(['Si'=>'SI','No'=>'NO']) ?>


    <?= $form->field($model, 'promep_perfil')->dropDownList(['Si'=>'SI','No'=>'NO']) ?>


    <?= $form->field($model, 'tc_perfil')->dropDownList(['si'=>'SI','no'=>'NO']) ?>

    <?= $form->field($model, 'idgradoacademico')->dropDownList(
        ArrayHelper::map(Gradoacademico::find()->all(),'idgradoacademico','sigla_de_grado'),
        ['prompt'=>'select Grado']) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
