<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \mdm\admin\models\form\Login */

$this->title = Yii::t('rbac-admin', 'Administrador');
$this->params= $this->title;
?>
<img src="/images/swrpi01.png" align="center" style="max-width:50%;width:auto;height:auto;">
<div class="user-login">
    
  <!--<h5>TecNM Campus Valladolid</h5>
   <h5><?= Html::encode($this->title) ?></h5> Aquí puedes escribir tu comentario -->
    
    <p>Login. Por favor Llene los campos para iniciar su sesión</p>
    <div class="row",>
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div style="color:#999;margin:1em 0">
                    Si ha olvidado su contraseña, puede <?= Html::a('Recuperarlo', ['user/request-password-reset']) ?>.
                    Para nuevo usuario puede <?= Html::a('Registrarse', ['user/signup']) ?>.
                </div>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('rbac-admin', 'Login'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
