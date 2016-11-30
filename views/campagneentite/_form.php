<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Campagneentite */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campagneentite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_campagne')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_entite')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
