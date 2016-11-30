<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donneesource */

$this->title = 'Update Donneesource: ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Donneesources', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donneesource-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
