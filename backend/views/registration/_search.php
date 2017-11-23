<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RegistrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= //$form->field($model, 'nom') ?>

    <?= //$form->field($model, 'prenom') ?>

    <?= $form->field($model, 'annee') ?>

    <?= $form->field($model, 'specialite') ?>

    <?= //$form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'telephone') ?>

    <?php echo $form->field($model, 'known') ?>

    <?php echo $form->field($model, 'level') ?>

    <?php echo $form->field($model, 'coming') ?>

    <?php echo $form->field($model, 'participated') ?>

    <?php echo $form->field($model, 'interested') ?>

    <?php // echo $form->field($model, 'accepted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
