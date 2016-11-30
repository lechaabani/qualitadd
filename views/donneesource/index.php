<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DonneesourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $Id_donnee string */

$this->title = 'Données sources disponibles' ;
$this->params['breadcrumbs'][] = $this->title ;

/*
$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM donnee
		WHERE donnee.identifiant!=:identifiant
		and donnee.Identifiant not in (select identifiant from donneesource where identifiant_pere =:identifiant)'
		, [':identifiant' => $model->Identifiant])->queryScalar();

		$provider = new SqlDataProvider([
				'sql' => 'SELECT * FROM `donnee`
				WHERE donnee.identifiant!=:identifiant
				and donnee.Identifiant not in (select identifiant from donneesource where identifiant_pere =:identifiant)',
				'params' => [':identifiant' => $model->Identifiant],
				'totalCount' => $count,
				'pagination' => [
						'pageSize' => 10,
				],
		]);

		// returns an array of data rows
		$models = $provider->getModels();
*/

?>
<div class="donneesource-index">

    <h1><?= Html::encode($this->title) ?>: <?= $id_donnee ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php echo Html::beginForm(
			['donneesource/create']
	); ?>
	
	<?php echo Html::hiddenInput('Id_donnee',$id_donnee)?>
    
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
			'contentOptions' => [ 'style'=>'width: 20%'], 
			],
            //'Description',
            //'Code_systeme',
            //'Typologie',
            [
			'attribute' => 'Format',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Granularite',
            [
			'attribute' => 'Application',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Table',
            // 'Etape',
            // 'Mode_de_production',
            // 'Origine',
            // 'Frequence_de_mise_a_jour',
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 19%'], 
			],
            // 'Commentaires',
            // 'Statut',
            // 'Justification',
            [
			'attribute' => 'Priorite',
			'contentOptions' => [ 'style'=>'width: 5%'], 
			],
            // 'Donnee_sensible',
            // 'Donnees_sources',
            // 'Controles_associes',
            // 'Plans_actions_associes',

            ['class' => 'yii\grid\CheckBoxColumn'],
        		
        ],
    ]); ?>
    
   <?= Html::submitButton('Selectionner', ['class' => 'btn btn-success']) ?>

    <?php echo Html::endForm(); ?>
</div>
