<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Constatplanaction */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Constatplanaction',
]) . $model->id_constat;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Constatplanactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_constat, 'url' => ['view', 'id_constat' => $model->id_constat, 'id_planaction' => $model->id_planaction]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="constatplanaction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
