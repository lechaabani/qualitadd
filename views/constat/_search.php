<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ConstatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Etape') ?>

    <?= $form->field($model, 'Priorite') ?>

    <?= $form->field($model, 'Applications_concernees') ?>

    <?php // echo $form->field($model, 'Responsable') ?>

    <?php // echo $form->field($model, 'Cree_le') ?>

    <?php // echo $form->field($model, 'Cree_par') ?>

    <?php // echo $form->field($model, 'Description') ?>

    <?php // echo $form->field($model, 'Valide_le') ?>

    <?php // echo $form->field($model, 'Valide_par') ?>

    <?php // echo $form->field($model, 'Commentaires_du_valideur') ?>

    <?php // echo $form->field($model, 'Plans_actions_associes') ?>

    <?php // echo $form->field($model, 'Pieces_jointes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
