<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Campagne */

$this->title = 'Mise à jour de la campagne : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Campagnes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="campagne-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
