<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeuilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seuil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Controle') ?>

    <?= $form->field($model, 'Critere') ?>

    <?= $form->field($model, 'Donnee') ?>

    <?= $form->field($model, 'Seuil_Qualite_Faible') ?>

    <?php // echo $form->field($model, 'Seuil_Qualite_Moyenne') ?>

    <?php // echo $form->field($model, 'Type_de_critere') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
