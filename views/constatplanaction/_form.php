<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Constatplanaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="constatplanaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_constat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_planaction')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
