<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diagramme */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Diagramme',
]) . $model->Diag;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagrammes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Diag, 'url' => ['view', 'id' => $model->Diag]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="diagramme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
