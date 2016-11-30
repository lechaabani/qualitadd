<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\Controle */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Contrôles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controle-view">

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
            'Type',
            'Frequence',
            'Statut',
            'Responsable',
            'Application',
            'Etape',
            'Actions_a_effectuer_si_anomalie',
        ],
    ]) ?>

	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Critères Solvabilité 2'; ?></font></b><HR></div>
	   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Exhaustivite',
            'Exactitude',
            'Pertinence',
        ],
    ]) ?>
	
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données contrôlées'; ?></font></b><HR></div>
	
		<?= Yii::$app->view->render('//donneecontrolee/listview1controle', array('model'=>$model)); ?>
	
	
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Preuves'; ?></font></b><HR></div>
	   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Preuves',
            'Commentaires_preuves',
        ],
    ]) ?>

		<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Documents'; ?></font></b><HR></div>
	   <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Documents',
            'Commentaires_documents',
        ],
    ]) ?>
	
</div>
