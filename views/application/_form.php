<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Application */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="application-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Sauvegarder' : 'Sauvegarder', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>

    <?= $form->field($model, 'Identifiant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Libelle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Responsable')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'Origine')->dropDownList(['Interne' => 'Interne', 'Externe' => 'Externe'],['prompt'=>'Selectionner','style'=>'width:200px']); ?>

    <?php ActiveForm::end(); ?>

</div>
