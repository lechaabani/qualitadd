<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Donneesource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donneesource-form">



    <?php $form = ActiveForm::begin(); ?>
	
	    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Code_systeme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Typologie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Granularite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Application')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Table')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Etape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Mode_de_production')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Origine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Frequence_de_mise_a_jour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Commentaires')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Statut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Justification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Priorite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Donnee_sensible')->textInput() ?>

    <?= $form->field($model, 'Donnees_sources')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Controles_associes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Plans_actions_associes')->textInput(['maxlength' => true]) ?>


    <?php ActiveForm::end(); ?>

</div>
