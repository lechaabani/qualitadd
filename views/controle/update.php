<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Controle */

$this->title = 'Mise à jour de contrôle : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Contrôles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="controle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
