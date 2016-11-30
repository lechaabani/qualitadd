<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonneeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donnee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Identifiant') ?>

    <?= $form->field($model, 'Libelle') ?>

    <?= $form->field($model, 'Description') ?>

    <?= $form->field($model, 'Code_systeme') ?>

    <?= $form->field($model, 'Typologie') ?>

    <?php // echo $form->field($model, 'Format') ?>

    <?php // echo $form->field($model, 'Granularite') ?>

    <?php // echo $form->field($model, 'Application') ?>

    <?php // echo $form->field($model, 'Table') ?>

    <?php // echo $form->field($model, 'Etape') ?>

    <?php // echo $form->field($model, 'Mode_de_production') ?>

    <?php // echo $form->field($model, 'Origine') ?>

    <?php // echo $form->field($model, 'Frequence_de_mise_a_jour') ?>

    <?php // echo $form->field($model, 'Commentaires') ?>

    <?php // echo $form->field($model, 'Statut') ?>

    <?php // echo $form->field($model, 'Justification') ?>

    <?php // echo $form->field($model, 'Priorite') ?>

    <?php // echo $form->field($model, 'Donnee_sensible') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
