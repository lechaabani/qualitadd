<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Organigramme */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Organigramme',
]) . $model->Orga;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Organigrammes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Orga, 'url' => ['view', 'id' => $model->Orga]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="organigramme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
