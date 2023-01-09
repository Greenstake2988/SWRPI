<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos\models\Proyectosinternos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosinternos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo_proyecto')->textInput(['placeholder' => "Titulo del proyecto"]) ?>

    <?= $form->field($model, 'tipo_investigacion_proyecto')->dropDownList(['Básica'=>'Básica','Aplicada'=>'Aplicada', 'Desarrollo Tecnológico'=>'Desarrollo tecnologico','Educativa'=>'Educativa']) ?>

    <?= $form->field($model, 'area_de_desarrollo')->dropDownList([
    'Ciencias Químicas'=>'Ciencias Químicas',
    'Ingeniería Industrial'=>'Ingeniería Industrial',
    'Administrativa y Desarrollo Regional'=>'Administrativa y Desarrollo Regional',
    'Ciencias Biológicas'=>'Ciencias Biológicas',
    'Ciencias de la Educación'=>'Ciencias de la Educación',
    'Ciencias de la Tierra y del Medio Ambiente'=>'Ciencias de la Tierra y del Medio Ambiente',
    'Ciencias del Mar'=>'Ciencias del Mar',
    'Ingeniería Eléctrica'=>'Ingeniería Eléctrica',
    'Ingenieria Electrónica'=>'Ingenieria Electrónica',
    'Ciencias Agrícolas y Forestales'=>'Ciencias Agrícolas y Forestales',
    'Ingeniería Química'=>'Ingeniería Química',
    'Ingenieria Bioquímica'=>'Ingenieria Bioquímica',
    'Ingenieria Alimentos'=>'Ingenieria Alimentos',
    'Biotecnología'=>'Biotecnología',
    'Ingeniería Mecánica'=>'Ingeniería Mecánica',
    'Ingenieria Mecatrónica'=>'Ingenieria Mecatrónica',
    'Ciencias de los Materiales'=>'Ciencias de los Materiales',
    'Polímeros'=>'Polímeros',
    'Ciencias de la Computación'=>'Ciencias de la Computación',
    'Sistemas Computacionales'=>'Sistemas Computacionales',
    'Informática'=>'Informática']) ?>


    <?= $form->field($model, 'descripcion_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duracion_proyecto')->dropDownList(['6 Meses'=>'6 Meses','1 Año'=>'1 Año']) ?>

    <?= $form->field($model, 'institucion_apoyoeconomico')->textInput(['placeholder' => "Institución que ofrece el apoyo económico"]) ?>

    <?= $form->field($model, 'resumen_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'introduccion_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado_arte_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo_general_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'objetivo_especifico_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'idperiodos')->textInput() ?>

    <?= $form->field($model, 'membretes_idmembretes')->textInput() ?>

    <?= $form->field($model, 'impactos_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metodologia_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vinculacion_sector_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencias_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lugar_desarrollo_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infraestructura_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
