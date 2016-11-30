<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planaction-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Date_identification')->textInput() ?>

    <?= $form->field($model, 'Campagne')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_amelioration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Type_de_solution')->textInput(['maxlength' => true]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données'; ?></font></b><HR></div>

    <?= $form->field($model, 'Donnees_associees')->textInput(['maxlength' => true]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Anomalies'; ?></font></b><HR></div>

    <?= $form->field($model, 'Constats_associes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Anomalies_constatees')->textInput(['maxlength' => true]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Remédiations'; ?></font></b><HR></div>

    <?= $form->field($model, 'Date_cible_a_respecter')->textInput() ?>

    <?= $form->field($model, 'Recurrence_prevue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Applications')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Niveau_de_priorite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Statut')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
