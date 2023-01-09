<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contacto';
$this->params[] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       Si tiene algun error o inconformidad, complete el siguiente formulario para comunicarse con nosotros.
       Gracias.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true,'placeholder'=>'Nombre y apellidos'])->label(false); ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Correo electronico'])->label(false);  ?>

                <?= $form->field($model, 'subject')->textInput(['placeholder'=>'Asunto de mensaje'])->label(false);  ?>

                <?= $form->field($model, 'body')->textarea(['rows' =>4,'placeholder'=>'Cuerpo del mensaje'])->label(false); ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
