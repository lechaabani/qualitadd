<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $model app\models\Controle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="controle-form">

    <?php $form = ActiveForm::begin(); ?>
	
	    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>
	
    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,]) ?>

    <?= $form->field($model, 'Description')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?php echo $form->field($model, 'Type')->dropDownList(['Manuel' => 'Manuel', 'Automatique' => 'Automatique'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?php echo $form->field($model, 'Frequence')->dropDownList(['Quotidienne' => 'Quotidienne','Hebdomadaire' => 'Hebdomadaire', 'Mensuelle' => 'Mensuelle', 'Trimestrielle' => 'Trimestrielle', 'Semestrielle' => 'Semestrielle', 'Annuelle' => 'Annuelle', 'Spécifique' => 'Spécifique'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

     <?php echo $form->field($model, 'Statut')->dropDownList(['Brouillon' => 'Brouillon', 'Validé' => 'Validé'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Responsable')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Application')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Etape')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Actions_a_effectuer_si_anomalie')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Critères Solvabilité 2'; ?></font></b><HR></div>
	
	<?php $model->Exhaustivite = 0; ?>
<?= $form->field($model, 'Exhaustivite')->checkbox()->label(''); ?>

    <?php $model->Exactitude = 0; ?>
<?= $form->field($model, 'Exactitude')->checkbox()->label(''); ?>

    <?php $model->Pertinence = 0; ?>
<?= $form->field($model, 'Pertinence')->checkbox()->label(''); ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données contrôlées'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//donneecontrolee/listupdate1controle', array('model'=>$model)); ?>


<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Preuves'; ?></font></b><HR></div>

    <?= Html::button('Sélectionner un fichier', ['class'=>'btn btn-success']) ?><HR>

    <?= $form->field($model, 'Commentaires_preuves')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Documents'; ?></font></b><HR></div>
	
	<?= Html::button('Sélectionner un fichier', ['class'=>'btn btn-success']) ?><HR>

    <?= $form->field($model, 'Commentaires_documents')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?php ActiveForm::end(); ?>

</div>
