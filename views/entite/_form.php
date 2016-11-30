<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Entite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entite-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true]) ?>

     <?php echo $form->field($model, 'Type')->dropDownList(['1' => 'Organisation', '2' => 'Domaine', '3' => 'Département', '4' => 'Service', '5' => 'Equipe'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>
	
	<?= $form->field($model, 'Entite_parente')->textInput(['maxlength' => true]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Entités filles'; ?></font></b><HR></div>
	
	<?= $form->field($model, 'Entites_filles')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
