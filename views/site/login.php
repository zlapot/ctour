<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="site-login">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username')->textInput() ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox() ?>

        <div class="form-group">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>


    <?= Html::a('Регистрация', ['/site/reg'], ['class'=>'btn btn-primary']) ?>


</div>
