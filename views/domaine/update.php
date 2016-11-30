<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Domaine */

$this->title = 'Mise à jour de l\'domaine : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'domaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="Domaine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
