<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donnee */

$this->title = Yii::t('app', 'Mise à jour de la donnée : ', [
    'modelClass' => 'Donnee',
]) . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Donnees'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Mise à jour');
?>
<div class="donnee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
