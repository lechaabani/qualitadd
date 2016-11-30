<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Planaction */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Plan d\'actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planaction-view">

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

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Identifiant',
            'Libelle',
            'Description',
            'Responsable',
            'Date_identification',
            'Campagne',
            'Source',
            'Type_amelioration',
            'Type_de_solution',
        ],
    ]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données'; ?></font></b><HR></div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Donnees_associees',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Anomalies'; ?></font></b><HR></div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Constats_associes',
            'Anomalies_constatees',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles'; ?></font></b><HR></div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Date_cible_a_respecter',
            'Recurrence_prevue',
            'Applications',
            'Niveau_de_priorite',
            'Statut',
        ],
    ]) ?>

</div>
