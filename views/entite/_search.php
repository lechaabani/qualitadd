<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EntiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="entite-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Type') ?>

    <?= $form->field($model, 'Entite_parente') ?>

    <?php // echo $form->field($model, 'Entites_filles') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
