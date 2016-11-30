<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Certificat */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Certificats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificat-view">

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

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Caractéristiques'; ?></font></b><HR></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Identifiant',
            'Libelle',
            'Campagne',
            'Donnee',
            'Controle',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Seuils'; ?></font></b><HR></div>

   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Critere_de_seuil',
            'Type_de_critere',
            'Seuil_Qualite_Moyenne',
            'Seuil_Qualite_Faible',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Résultats'; ?></font></b><HR></div>

   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Resultat',
            'Evaluation',
            'Evaluation_forcee',
            'Analyse',
            'Remediation',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Justificatifs'; ?></font></b><HR></div>

   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Justificatifs',
        ],
    ]) ?>

</div>
