<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="donneeentite-sublistupdate1donnee">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT count(*) 
	FROM `donneeentite` 
	LEFT OUTER JOIN donnee on donneeentite.id_donnee = donnee.identifiant
	LEFT OUTER JOIN entite on entite.identifiant = donneeentite.id_entite
	where donnee.identifiant = :identifiant',
	[':identifiant' => $id_donnee])->queryScalar();


$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_donnee . '\' as Id_donnee, entite.*
	FROM donneeentite
	LEFT OUTER JOIN donnee on donneeentite.id_donnee = donnee.identifiant
	LEFT OUTER JOIN entite on entite.identifiant = donneeentite.id_entite	
	where donnee.identifiant  = :identifiant',
    'params' => [':identifiant' => $id_donnee],
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
						['donneeentite/delete1', 
							'id_entite' => $model['Identifiant'],
							'id_donnee' => $model['Id_donnee'],
							'title'=>'Delete',
						]);
					},
				],
        	],
        ],
    ]); ?>
</div>


<!-- <?= Html::a('Test', ['donneeentite/index', 'id_donnee' =>  $id_donnee], ['class' => 'btn btn-primary']) ?> -->

<?= Html::button('Ajouter une responsabilité', ['value'=>Url::to(['donneeentite/index','id_donnee' => $id_donnee]),'class'=>'btn btn-success', 'id'=>'modalButtonDR']) ?>
<?php
	Modal::begin([
			// 'header'=>'<h4>Données sources</h4>',
			'id'=>'modal',
			'size'=>'modal-lg',
		]);
		
		echo"<div id='modalContent'></div>";
		
		Modal::end();
?>