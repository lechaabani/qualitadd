<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CertificatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="certificat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Campagne') ?>

    <?= $form->field($model, 'Donnee') ?>

    <?= $form->field($model, 'Controle') ?>

    <?php // echo $form->field($model, 'Critere_de_seuil') ?>

    <?php // echo $form->field($model, 'Type_de_critere') ?>

    <?php // echo $form->field($model, 'Seuil_Qualite_Moyenne') ?>

    <?php // echo $form->field($model, 'Seuil_Qualite_Faible') ?>

    <?php // echo $form->field($model, 'Resultat') ?>

    <?php // echo $form->field($model, 'Evaluation') ?>

    <?php // echo $form->field($model, 'Evaluation_forcee') ?>

    <?php // echo $form->field($model, 'Analyse') ?>

    <?php // echo $form->field($model, 'Remediation') ?>

    <?php // echo $form->field($model, 'Justificatifs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
