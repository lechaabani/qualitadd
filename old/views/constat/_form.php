<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Constat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constat-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,'style'=>'width:500px']) ?>

    <?= $form->field($model, 'Etape')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

     <?php echo $form->field($model, 'Priorite')->dropDownList(['Haute' => 'Haute', 'Moyenne' => 'Moyenne', 'Faible' => 'Faible'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Applications_concernees')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Caractéristiques'; ?></font></b><HR></div>

    <?= $form->field($model, 'Responsable')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Cree_le')->textInput() ?>

    <?= $form->field($model, 'Cree_par')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Description')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?= $form->field($model, 'Valide_le')->textInput() ?>

    <?= $form->field($model, 'Valide_par')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Commentaires_du_valideur')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Plans d\'actions'; ?></font></b><HR></div>

    <?= $form->field($model, 'Plans_actions_associes')->textInput(['maxlength' => true]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Pièces jointes'; ?></font></b><HR></div>

    <?= $form->field($model, 'Pieces_jointes')->textInput(['maxlength' => true]) ?>


    <?php ActiveForm::end(); ?>

</div>
