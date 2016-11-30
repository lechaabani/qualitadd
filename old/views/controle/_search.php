<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ControleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="controle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'Frequence') ?>

    <?php // echo $form->field($model, 'Statut') ?>

    <?php // echo $form->field($model, 'Responsable') ?>

    <?php // echo $form->field($model, 'Application') ?>

    <?php // echo $form->field($model, 'Etape') ?>

    <?php // echo $form->field($model, 'Actions_a_effectuer_si_anomalie') ?>

    <?php // echo $form->field($model, 'Exhaustivite') ?>

    <?php // echo $form->field($model, 'Exactitude') ?>

    <?php // echo $form->field($model, 'Pertinence') ?>

    <?php // echo $form->field($model, 'Donnees_controlees') ?>

    <?php // echo $form->field($model, 'Preuves') ?>

    <?php // echo $form->field($model, 'Commentaires_preuves') ?>

    <?php // echo $form->field($model, 'Documents') ?>

    <?php // echo $form->field($model, 'Commentaires_documents') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
