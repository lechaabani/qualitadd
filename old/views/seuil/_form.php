<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seuil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seuil-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Controle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Critere')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Donnee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Seuil_Qualite_Faible')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Seuil_Qualite_Moyenne')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_de_critere')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
