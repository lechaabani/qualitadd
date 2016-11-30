<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donneeentite */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Donneeentite',
]) . $model->id_donnee;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Donneeentites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_donnee, 'url' => ['view', 'id_donnee' => $model->id_donnee, 'id_entite' => $model->id_entite]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="donneeentite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
