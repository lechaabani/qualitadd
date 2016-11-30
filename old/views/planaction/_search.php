<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanactionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planaction-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Responsable') ?>

    <?= $form->field($model, 'Date_identification') ?>

    <?php // echo $form->field($model, 'Campagne') ?>

    <?php // echo $form->field($model, 'Source') ?>

    <?php // echo $form->field($model, 'Type_amelioration') ?>

    <?php // echo $form->field($model, 'Type_de_solution') ?>

    <?php // echo $form->field($model, 'Donnees_associees') ?>

    <?php // echo $form->field($model, 'Constats_associes') ?>

    <?php // echo $form->field($model, 'Anomalies') ?>

    <?php // echo $form->field($model, 'Anomalies_constatees') ?>

    <?php // echo $form->field($model, 'Date_cible_a_respecter') ?>

    <?php // echo $form->field($model, 'Recurrence_prevue') ?>

    <?php // echo $form->field($model, 'Applications') ?>

    <?php // echo $form->field($model, 'Niveau_de_priorite') ?>

    <?php // echo $form->field($model, 'Statut') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
