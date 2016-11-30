<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Donneesource */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Donneesources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donneesource-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Identifiant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Identifiant], [
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
            'Libelle',
            'Description',
            'Code_systeme',
            'Typologie',
            'Format',
            'Granularite',
            'Application',
            'Table',
            'Etape',
            'Mode_de_production',
            'Origine',
            'Frequence_de_mise_a_jour',
            'Responsable',
            'Commentaires',
            'Statut',
            'Justification',
            'Priorite',
            'Donnee_sensible',
            'Donnees_sources',
            'Controles_associes',
            'Plans_actions_associes',
        ],
    ]) ?>

</div>
