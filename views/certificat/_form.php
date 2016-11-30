<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Certificat */
/* @var $form yii\widgets\ActiveForm */
?>


<script type="text/javascript">

	// var vSeuilQM ; // certificat-seuil_qualite_moyenne 
	// var vSeuilQF ; // certificat-seuil_qualite_faible 
	// var vCertRes ; // certificat-resultat 
	// var vCertEval ; // certificat-evaluation 
	
	// <script type="text/javascript">
	
	function chkSeuilQualite() {
		
		// alert("chkSeuilQualite");

		var vSeuilQM = document.getElementById("certificat-seuil_qualite_moyenne").value ;
		var vSeuilQF = document.getElementById("certificat-seuil_qualite_faible").value ;
		
		if (!isNaN(vSeuilQM) && !isNaN(vSeuilQF)) {
			// document.getElementById("certificat-resultat").value = "???" ;
			document.getElementById("listResult").value = "" ;
		}
		
		listResultat() ;
	}
	
	
	function listResultat() {
		
		// alert("listResultat");
		
		var vListRes = document.getElementById("listResult").value
		
		if (vListRes != "")
			document.getElementById("certificat-resultat").value = document.getElementById("listResult").value ;
		
		chkResultat();
	}
	
	function chkResultat() {
		
		// alert("chkResultat");
		
		var vCertRes = document.getElementById("certificat-resultat").value ;
		var vSeuilQM = document.getElementById("certificat-seuil_qualite_moyenne").value ;
		var vSeuilQF = document.getElementById("certificat-seuil_qualite_faible").value ;
		

				
		if (vCertRes == "OK") {
			document.getElementById("certificat-evaluation").value = "Qualité élevée" ;
			return ;
		}
		
		if (vCertRes == "KO") {
			document.getElementById("certificat-evaluation").value = "Qualité moyenne" ;
			return;
		}
				
		if (vCertRes == "NA") {
			document.getElementById("certificat-evaluation").value = "NA" ;
			return;
		}

		
		if (!isNaN(vCertRes) && !isNaN(vSeuilQM) && !isNaN(vSeuilQF)) {
					
			var nCertRes = parseFloat(vCertRes);
			var nSeuilQM = parseFloat(vSeuilQM);
			var nSeuilQF = parseFloat(vSeuilQF);
			
			if (nCertRes < nSeuilQM) {
				document.getElementById("certificat-evaluation").value = "Qualité élevée" 
				return;
			}
			
			if (nCertRes > nSeuilQF) {
				document.getElementById("certificat-evaluation").value = "Qualité faible" ;
				return ;
			}
			
			document.getElementById("certificat-evaluation").value = "Qualité moyenne" ;


		} else {
			document.getElementById("certificat-evaluation").value = "NA" ;
		}
		
	}

</script>

<div class="certificat-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Soumettre le certificat' : 'Soumettre le certificat', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Caractéristiques'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true,'style'=>'width:400px']) ?>

    <?= $form->field($model, 'Campagne')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Donnee')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Controle')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Seuils'; ?></font></b><HR></div>

    <?= $form->field($model, 'Critere_de_seuil')->textInput(['maxlength' => true,'style'=>'width:200px']) ?>

    <?php echo $form->field($model, 'Type_de_critere')->dropDownList(['Numérique' => 'Numérique', 'Pourcentage' => 'Pourcentage', 'Texte' => 'Texte'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Seuil_Qualite_Moyenne')->textInput(['maxlength' => true,
		'style'=>'width:200px',
	    'onchange'=>'chkSeuilQualite()']
    ) ?>

    <?= $form->field($model, 'Seuil_Qualite_Faible')->textInput(['maxlength' => true,
		'style'=>'width:200px',
		'onchange'=>'chkSeuilQualite()']
	) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Résultats'; ?></font></b><HR></div>

<style type="text/css">
body, html {
  margin: 0px;
  padding: 0px;
}
  
#inline1 {
  position: relative;
  display: inline-block;
}
#inline2 {
  position: relative;
  display: inline-block;
  top: 30px;
}
</style>
  <div id="inline1">
  
      <?= $form->field($model, 'Resultat')->textInput(['maxlength' => true,
		'style'=>'width:200px',
		'onchange'=>'chkResultat()']
	) ?>
  
  </div>
  
  <div id="inline2">
  
  <select id="listResult" onchange="listResultat()">
	  <option value=""></option>
	  <option value="OK">OK</option>
	  <option value="KO">KO</option>
	  <option value="NA">NA</option>
	</select>
  
  </div>


	

	
    <?php /* echo $form->field($wRes)->dropDownList(['OK' => 'OK', 'KO' => 'KO', 'NA' => 'NA', 'Numeric' => 'Numeric'],[
	'prompt'=>'Selectionner',
	'style'=>'width:200px',
	'onchange'=>'chkResultat()']
	); */ ?>

	
    <?php /* echo $form->field($model, 'Resultat')->dropDownList(['OK' => 'OK', 'KO' => 'KO', 'NA' => 'NA', 'Numeric' => 'Numeric'],[
	'prompt'=>'Selectionner',
	'style'=>'width:200px',
	'onchange'=>'chkResultat()']
	); */ ?>
	

    <?php echo $form->field($model, 'Evaluation')->dropDownList(['Qualité élevée' => 'Qualité élevée', 'Qualité moyenne' => 'Qualité moyenne', 'Qualité faible' => 'Qualité faible', 'NA' => 'NA'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>
   
    <?php echo $form->field($model, 'Evaluation_forcee')->dropDownList(['Qualité élevée' => 'Qualité élevée', 'Qualité moyenne' => 'Qualité moyenne', 'Qualité faible' => 'Qualité faible', 'NA' => 'NA'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?= $form->field($model, 'Analyse')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

    <?= $form->field($model, 'Remediation')->textArea(['maxlength' => true,'style'=>'height:100px']) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Justificatifs'; ?></font></b><HR></div>

    <div class="container" style="margin-top: 20px;">
    <div class="row">

        <div class="col-lg-6 col-sm-6 col-12">
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-success">
                        Importer un fichier&hellip; <input type="file" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

        </div>
        
    </div>
</div>

    <?php ActiveForm::end(); ?>

</div>





