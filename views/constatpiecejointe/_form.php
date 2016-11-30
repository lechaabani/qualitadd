<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Constatpiecejointe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constatpiecejointe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_constat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piece')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
