<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CampagnesourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $id_pere string */

$this->title = 'Contrôles disponibles' ;
$this->params['breadcrumbs'][] = $this->title ;

/*
$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM campagne
		WHERE campagne.identifiant!=:identifiant
		and campagne.Identifiant not in (select identifiant from campagnesource where identifiant_pere =:identifiant)'
		, [':identifiant' => $model->Identifiant])->queryScalar();

		$provider = new SqlDataProvider([
				'sql' => 'SELECT * FROM `campagne`
				WHERE campagne.identifiant!=:identifiant
				and campagne.Identifiant not in (select identifiant from campagnesource where identifiant_pere =:identifiant)',
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

<div class="controlecampagne-index">

    <h1><?= Html::encode($this->title) ?>: <?= $id_campagne ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php echo Html::beginForm(
			['controlecampagne/create']
	); ?>
	
	<?php echo Html::hiddenInput('Id_campagne',$id_campagne)?>
    
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
			'contentOptions' => [ 'style'=>'width: 45%'], 
			],
            //'Description',
            [
			'attribute' => 'Type',
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            //'Frequence',
            // 'Statut',
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            [
			'attribute' => 'Application',
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            // 'Etape',
            // 'Actions_a_effectuer_si_anomalie',
            // 'Exhaustivite',
            // 'Exactitude',
            // 'Pertinence',
            // 'Campagnes_controlees',
            // 'Preuves',
            // 'Commentaires_preuves',
            // 'Documents',
            // 'Commentaires_documents',


            ['class' => 'yii\grid\CheckBoxColumn'],
        		
        ],
    ]); ?>
    
   <?= Html::submitButton('Selectionner', ['class' => 'btn btn-success']) ?>

    <?php echo Html::endForm(); ?>
</div>
