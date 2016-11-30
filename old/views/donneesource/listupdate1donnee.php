<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="donneesource-sublistupdate1donnee">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT count(*) 
	FROM `donnee` 
	where donnee.identifiant in (select id_source from donneesource where id_donnee = :identifiant )',
	[':identifiant' => $id_donnee])->queryScalar();


$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_donnee . '\' as Id_donnee, donnee.*,
	GROUP_CONCAT(donneeentite.id_entite ORDER BY donneeentite.id_entite SEPARATOR \' - \') as Responsable
	FROM `donnee` 
	LEFT OUTER JOIN donneeentite on donneeentite.id_donnee = donnee.identifiant
	where donnee.identifiant in (select id_source from donneesource where id_donnee = :identifiant) 
	GROUP BY donnee.identifiant',
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
			'contentOptions' => [ 'style'=>'width: 20%'], 
			],
            [
			'attribute' => 'Format',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
        	[  		
        	'attribute' => 'Priorite',
        	'contentOptions' => [ 'style'=>'width: 5%'],
        	],
            // 'Granularite',
            [
			'attribute' => 'Application',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 19%'], 
			],

            ['class' => 'yii\grid\ActionColumn',
            	'template'=>'{view}{delete1}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['donnee/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete1' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['donneesource/delete1', 
							'id_source' => $model['Identifiant'],
							'id_donnee' => $model['Id_donnee'],
							'title'=>'Delete',
						]);
					},
				],
        	],
        ],
    ]); ?>
</div>


<!-- <?= Html::a('Test', ['donneesource/index', 'id_donnee' =>  $id_donnee], ['class' => 'btn btn-primary']) ?> -->

<?= Html::button('Ajouter une source', ['value'=>Url::to(['donneesource/index','id_donnee' => $id_donnee]),'class'=>'btn btn-success', 'id'=>'modalButtonDS']) ?>
<?php
	Modal::begin([
			// 'header'=>'<h4>Données sources</h4>',
			'id'=>'modal',
			'size'=>'modal-lg',
		]);
		
		echo"<div id='modalContent'></div>";
		
		Modal::end();
?>