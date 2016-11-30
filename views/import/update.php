<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Import */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Import',
]) . $model->import;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->import, 'url' => ['view', 'id' => $model->import]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="import-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
