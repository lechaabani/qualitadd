<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campagne */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Campagnes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campagne-view">

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
            'Statut',
            'Date_de_debut',
            'Date_de_derniere_pause',
            'Date_de_fin_effective',
            'Date_de_fin_previsionnelle',
        ],
    ]) ?>
	
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Périmètre'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//campagneentite/listview1campagne', array('id_campagne'=>$model->Identifiant)); ?>
	
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Contrôles'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//controlecampagne/listview1campagne', array('id_campagne'=>$model->Identifiant)); ?>

</div>
