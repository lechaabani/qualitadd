<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="campagneentite-sublistupdate1campagne">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT count(*) 
	FROM `campagneentite` 
	LEFT OUTER JOIN campagne on campagneentite.id_campagne = campagne.identifiant
	LEFT OUTER JOIN entite on entite.identifiant = campagneentite.id_entite
	where campagne.identifiant = :identifiant',
	[':identifiant' => $id_campagne])->queryScalar();


$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_campagne . '\' as Id_campagne, entite.*
	FROM campagneentite
	LEFT OUTER JOIN campagne on campagneentite.id_campagne = campagne.identifiant
	LEFT OUTER JOIN entite on entite.identifiant = campagneentite.id_entite	
	where campagne.identifiant  = :identifiant',
    'params' => [':identifiant' => $id_campagne],
    'totalCount' => $count,
    'pagination' => [
        'pageSize' => 10,
    ],

]);

// returns an array of data rows
$models = $provider->getModels();
?>


    <?= GridView::widget([
        'dataProvider' => $provider,
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
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Entite_parente',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Entites_filles',


            ['class' => 'yii\grid\ActionColumn',
            	'template'=>'{view}{delete1}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['entite/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete1' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['campagneentite/delete1', 
							'id_entite' => $model['Identifiant'],
							'id_campagne' => $model['Id_campagne'],
							'title'=>'Delete',
						]);
					},
				],
        	],
        ],
    ]); ?>
</div>


<!-- <?= Html::a('Test', ['campagneentite/index', 'id_campagne' =>  $id_campagne], ['class' => 'btn btn-primary']) ?> -->

<?= Html::button('Ajouter une responsabilité', ['value'=>Url::to(['campagneentite/index','id_campagne' => $id_campagne]),'class'=>'btn btn-success', 'id'=>'modalButtonDR']) ?>
<?php
	Modal::begin([
			// 'header'=>'<h4>Données sources</h4>',
			'id'=>'modal',
			'size'=>'modal-lg',
		]);
		
		echo"<div id='modalContent'></div>";
		
		Modal::end();
?>