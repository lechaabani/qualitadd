<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanactionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plan d\'actions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planaction-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter un plan d\'actions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
		<br/>
		<b><?php echo 'Favoris : '; ?></b>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Retraite individuelle"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="PREFON"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Public"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Prive"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="ERC"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:white"></span> <input type="submit" class="btn btn-primary" value="Actif"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Emprunteur"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Epargne"></span><?php echo '&nbsp;'; ?>
<br/><br/>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
			'attribute' => 'Identifiant',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Libelle',
			'contentOptions' => [ 'style'=>'width: 40%'], 
			],
            //'Description',
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            //'Date_identification',
            // 'Campagne',
            // 'Source',
            // 'Type_amelioration',
            // 'Type_de_solution',
            // 'Donnees_associees',
            // 'Constats_associes',
            // 'Anomalies',
            // 'Anomalies_constatees',
            // 'Date_cible_a_respecter',
            // 'Recurrence_prevue',
            // 'Applications',
            // 'Niveau_de_priorite',
            [
			'attribute' => 'Statut',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
