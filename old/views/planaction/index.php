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
