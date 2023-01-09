<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\entregablemeta\models\Entregablemeta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entregablemeta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_entregable')->dropDownList(['Académico'=>'Académico','Humano'=>'Humano'])?>

    <?= $form->field($model, 'descripcion')->dropDownList(['prompt'=>'Seleccionar Descripccion',
        'Integración '=>'Integración de alumnos de licenciatura al proyecto',
        'Participación '=>'Participación de alumnos residentes',
        'Participación '=>'Participación de estudiantes de servicio social',
        'Participación '=>'Participación de estudiantes por créditos complementario',
        'Articulos '=>'Articulos cientificos en revista arbitrara',
        'Articulos '=> 'Articulos científicos en revista indizadas',
        'Tesis '=> 'Tesis de maestria a desarrollar (indicar en observaciones nombre del tesista,título y anexar programa de trabajo sintético)',
        'Libros '=> 'Libros',
        'Capítulos '=> 'Capítulos de libros',
        'Registro '=> 'Registro de Propiedad Intelectual e Industrial',
        'Prototipos '=> 'Prototipos',
        'Paquetes '=> 'Paquetes tecnológicos',
        'Informes '=> 'Informes técnicos a empresas o instituciones',]) ?>

    <?= $form->field($model, 'fecha_entrega')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'observacion')->textInput(['placeholder' => "Observacion"]) ?>

    <?= $form->field($model, 'evidencia')->textInput(['placeholder' => "Evidencia"]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
