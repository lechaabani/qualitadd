<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;
use yii\jui\DatePicker ;
use yii\bootstrap\ActiveForm;


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

    <?php $form = ActiveForm::begin(
	/*
	[
    'layout' => 'horizontal',
    'fieldConfig' => [
		// 'template' => "<class='text-align:left'>{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
			'label' => 'col-sm-3',
			'wrapper' => 'col-sm-8',
        ],
    ],
	]*/
	); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	<span class="icon-input-btn"><span class="glyphicon glyphicon-play" style="color:white"></span> <input type="submit" class="btn btn-primary" value="Lancer"></span><?php echo '&nbsp;'; ?><span class="icon-input-btn"><span class="glyphicon glyphicon-pause" style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Pause"></span><?php echo '&nbsp;'; ?><span class="icon-input-btn"><span class="glyphicon glyphicon-stop" style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Clôturer"></span>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

	<?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Description')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?php echo $form->field($model, 'Statut')->dropDownList(['Brouillon' => 'Brouillon', 'En cours' => 'En cours', 'Terminé' => 'Terminé'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

	<label class="control-label">Date de début</label><?= $form->field($model, 'Date_de_debut')->widget(DatePicker::className(),[ 'dateFormat' => 'dd/MM/yyyy' ])->label(false); ?>

    <label class="control-label">Date de dernière pause</label><?= $form->field($model, 'Date_de_derniere_pause')->widget(DatePicker::className(),[ 'dateFormat' => 'dd/MM/yyyy' ])->label(false) ?>

	<label class="control-label">Date de fin effective</label> <?= $form->field($model, 'Date_de_fin_effective')->widget(DatePicker::className(),[ 'dateFormat' => 'dd/MM/yyyy' ])->label(false) ?>

    <label class="control-label">Date de fin prévisionnelle</label><?= $form->field($model, 'Date_de_fin_previsionnelle')->widget(DatePicker::className(),[ 'dateFormat' => 'dd/MM/yyyy' ])->label(false) ?>

	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Périmètre'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//campagneentite/listupdate1campagne', array('id_campagne'=>$model->Identifiant)); ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles associés'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//controlecampagne/listupdate1campagne', array('id_campagne'=>$model->Identifiant)); ?>

    <?php ActiveForm::end(); ?>

</div>
