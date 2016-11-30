<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seuil */

$this->title = 'Mettre à jour le seuil : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Seuils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="seuil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
