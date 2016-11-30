<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Utilisateur */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="utilisateur-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prenom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Entite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Habilitations')->textInput(['maxlength' => true]) ?>


    <?php ActiveForm::end(); ?>

</div>
