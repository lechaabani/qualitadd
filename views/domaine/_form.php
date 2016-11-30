<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Domaine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="Domaine-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true, 'style'=>'width:200px']) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['maxlength' => true]) ?>
      
    <?php ActiveForm::end(); ?>
    
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Entite'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//entitedomaine/listupdate1domaine', array('id_donnee'=>$model->Identifiant)); ?>
</div>
