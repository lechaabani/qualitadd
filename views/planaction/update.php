<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planaction */

$this->title = 'Mettre à jour le plan d\'action : ' . $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Plan d\'actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Identifiant, 'url' => ['view', 'id' => $model->Identifiant]];
$this->params['breadcrumbs'][] = 'Mise à jour';
?>
<div class="planaction-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
