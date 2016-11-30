<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Campagne */
/* @var $form yii\widgets\ActiveForm */
?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .glyphicon{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
	$(".icon-input-btn").each(function(){
        var btnFont = $(this).find(".btn").css("font-size");
        var btnColor = $(this).find(".btn").css("color");
		$(this).find(".glyphicon").css("font-size", btnFont);
        $(this).find(".glyphicon").css("color", btnColor);
        if($(this).find(".btn-xs").length){
            $(this).find(".glyphicon").css("top", "24%");
        }
	}); 
});
</script>

<div class="campagne-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	<span class="icon-input-btn"><span class="glyphicon glyphicon-play" style="color:white"></span> <input type="submit" class="btn btn-primary" value="Lancer"></span><?php echo '&nbsp;'; ?><span class="icon-input-btn"><span class="glyphicon glyphicon-pause" style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Pause"></span><?php echo '&nbsp;'; ?><span class="icon-input-btn"><span class="glyphicon glyphicon-stop" style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Clôturer"></span>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Description')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?php echo $form->field($model, 'Statut')->dropDownList(['Brouillon' => 'Brouillon', 'En cours' => 'En cours', 'Terminé' => 'Terminé'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Date_de_debut')->textInput() ?>

    <?= $form->field($model, 'Date_de_derniere_pause')->textInput() ?>

    <?= $form->field($model, 'Date_de_fin_effective')->textInput() ?>

    <?= $form->field($model, 'Date_de_fin_previsionnelle')->textInput() ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Périmètre'; ?></font></b><HR></div>

      <?= Html::button('Ajouter une entité', ['value'=>Url::to(['entitesdisponibles/index','id_pere' => $model->Identifiant]),'class'=>'btn btn-success', 'id'=>'modalButton']) ?>
	<?php
		Modal::begin([
		        'header'=>'<h4>Entités disponibles</h4>',
				'id'=>'modal',
				'size'=>'modal-lg',
			]);
			
			echo"<div id='modalContent'></div>";
			
			Modal::end();
	?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles'; ?></font></b><HR></div>


    <?= $form->field($model, 'Controles_associes')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
