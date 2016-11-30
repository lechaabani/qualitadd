<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Seuil */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Seuils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seuil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editer', ['update', 'id' => $model->Identifiant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Supprimer', ['delete', 'id' => $model->Identifiant], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Identifiant',
            'Controle',
            'Critere',
            'Donnee',
            'Seuil_Qualite_Faible',
            'Seuil_Qualite_Moyenne',
            'Type_de_critere',
        ],
    ]) ?>

</div>
