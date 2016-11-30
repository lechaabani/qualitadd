<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CampagneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campagne-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Statut') ?>

    <?= $form->field($model, 'Date_de_debut') ?>

    <?php // echo $form->field($model, 'Date_de_derniere_pause') ?>

    <?php // echo $form->field($model, 'Date_de_fin_effective') ?>

    <?php // echo $form->field($model, 'Date_de_fin_previsionnelle') ?>

    <?php // echo $form->field($model, 'Entites_associees') ?>

    <?php // echo $form->field($model, 'Controles_associes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
