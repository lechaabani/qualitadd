<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Constat */

$this->title = 'Mettre à jour le constat : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Constats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="constat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>