<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\SqlDataProvider;


/* @var $this yii\web\View */
/* @var $model app\models\Donnee */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Données'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donnee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Editer'), ['update', 'id' => $model->Identifiant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Supprimer'), ['delete', 'id' => $model->Identifiant], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
            'Commentaires',
        ],
    ]) ?>
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Priorisation'; ?></font></b><HR></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'Statut',
            'Justification',
            'Priorite',
            'Donnee_sensible',

        ],
    ]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Responsabilités'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//donneeentite/listview1donnee', array('id_donnee'=>$model->Identifiant)); ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Données sources'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//donneesource/listview1donnee', array('id_donnee'=>$model->Identifiant)); ?>


<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles associés'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//controledonnee/listview1donnee', array('id_donnee'=>$model->Identifiant)); ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Plans d\'actions associés'; ?></font></b><HR></div>

<?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'Identifiant',

        ],
    ]) ?>
	
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Diagramme de flux'; ?></font></b><HR></div>
	


</div>
