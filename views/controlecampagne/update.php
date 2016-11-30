<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Controlecampagne */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Controlecampagne',
]) . $model->id_controle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controlecampagnes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_controle, 'url' => ['view', 'id_controle' => $model->id_controle, 'id_campagne' => $model->id_campagne]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="controlecampagne-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
