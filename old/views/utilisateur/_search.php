<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UtilisateurSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilisateur-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Nom') ?>

    <?= $form->field($model, 'Prenom') ?>

    <?= $form->field($model, 'Email') ?>

    <?= $form->field($model, 'Entite') ?>

    <?php // echo $form->field($model, 'Habilitations') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
