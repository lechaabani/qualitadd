<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campagneentite */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Campagneentite',
]) . $model->id_campagne;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campagneentites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_campagne, 'url' => ['view', 'id_campagne' => $model->id_campagne, 'id_entite' => $model->id_entite]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="campagneentite-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
