<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Donnee */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="donnee-form">

    <?php $form = ActiveForm::begin(); ?>
	
	    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Description')->textArea(['maxlength' => true,'style'=>'width:400px','style'=>'height:150px']) ?>

    <?= $form->field($model, 'Code_systeme')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?php echo $form->field($model, 'Typologie')->dropDownList(['1' => 'Caractéristique de l\'assuré','2' => 'Caractéristique du prêt', '3' => 'Caractéristique du contrat', '4' => 'Caractéristique du référentiel', '5' => 'Information transverse', '6' => 'Caractéristique liée à la prime', '7' => 'Caractéristique liée au sinistre', '8' => 'Caractéristique liée au capital (CI et CRD)', '9' => 'Caractéristique liée aux lois et bases techniques ', '10' => 'Hypothèses techniques', '11' => 'Données comptables', '12' => 'Caractéristique du produit', '13' => 'Caractéristique de l’évènement ', '14' => 'Caractéristique d’un actif'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

	<?php echo $form->field($model, 'Format')->dropDownList(['Numerique' => 'Numerique', 'Montant' => 'Montant', 'Texte' => 'Texte', 'Date' => 'Date', 'Alphanumerique' => 'Alphanumerique'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Granularite')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Application')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Table')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Etape')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?php echo $form->field($model, 'Mode_de_production')->dropDownList(['Manuel' => 'Manuel','Semi-Automatique' => 'Semi-Automatique', 'Automatique' => 'Automatique'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?php echo $form->field($model, 'Origine')->dropDownList(['Interne' => 'Interne','Externe' => 'Externe'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?php echo $form->field($model, 'Frequence_de_mise_a_jour')->dropDownList(['Quotidienne' => 'Quotidienne','Hebdomadaire' => 'Hebdomadaire', 'Mensuelle' => 'Mensuelle', 'Trimestrielle' => 'Trimestrielle', 'Semestrielle' => 'Semestrielle', 'Annuelle' => 'Annuelle', 'Spécifique' => 'Spécifique'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Commentaires')->textArea(['maxlength' => true,'style'=>'width:400px','style'=>'height:100px']) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Priorisation'; ?></font></b><HR></div>

    <?php echo $form->field($model, 'Statut')->dropDownList(['Documente' => 'Documenté','Non documente' => 'Non documenté'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>


    <?php echo $form->field($model, 'Justification')->dropDownList(['Jugement d\'expert' => 'Jugement d\'expert', 'Sensibilite' => 'Sensibilites'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>
	
	<?php echo $form->field($model, 'Priorite')->dropDownList(['NA' => 'NA','P1' => 'P1', 'P2' => 'P2', 'P3' => 'P3'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>
	
	<?php echo $form->field($model, 'Donnee_sensible')->dropDownList([1 => 'Oui', 2 => 'Non'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Responsabilités'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//donneeentite/listupdate1donnee', array('id_donnee'=>$model->Identifiant)); ?>
	
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données sources'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//donneesource/listupdate1donnee', array('id_donnee'=>$model->Identifiant)); ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles associés'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//controledonnee/listupdate1donnee', array('id_donnee'=>$model->Identifiant)); ?>

	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Plans d\'actions associés'; ?></font></b><HR></div>


    <?php ActiveForm::end(); ?>


	
</div>
