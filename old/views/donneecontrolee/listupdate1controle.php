<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Controle */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="donneecontrolee-sublistupdate">

<?php 

// var_dump($model);

$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) 
	FROM donnee right 
	outer join controledonnee on donnee.identifiant = controledonnee.id_donnee 
	WHERE controledonnee.id_controle=:identifiant'
, [':identifiant' => $model->Identifiant])->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $model->Identifiant . '\' as Id_controle, donnee.*,
	GROUP_CONCAT(donneeentite.id_entite ORDER BY donneeentite.id_entite SEPARATOR \' - \') as Responsable
	FROM `donnee` 
	LEFT OUTER JOIN donneeentite on donneeentite.id_donnee = donnee.identifiant
	WHERE donnee.identifiant in (select id_donnee from controledonnee where id_controle = :identifiant)
	GROUP BY donnee.identifiant',
    'params' => [':identifiant' => $model->Identifiant],
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
            	'template'=>'{view}{delete2}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['donnee/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete2' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['donneecontrolee/delete2', 
							'id_donnee' => $model['Identifiant'],
							'id_controle' => $model['Id_controle'],
						]);
					},
				],
    			
        	],
        ],
    ]); ?>
</div>

<!-- <?= Html::a('Test', ['donneecontrolee/index', 'id_controle' => 'ACT_C01'], ['class' => 'btn btn-primary']) ?> -->

    <?= Html::button('Ajouter une donnée', ['value'=>Url::to(['donneecontrolee/index','id_controle' => $model->Identifiant]),'class'=>'btn btn-success', 'id'=>'modalButtonDC']) ?>
	<?php
		Modal::begin([
		        'header'=>'<h4>Données contrôlées</h4>',
				'id'=>'modal',
				'size'=>'modal-lg',
			]);
			
			echo"<div id='modalContent'></div>";
			
			Modal::end();
	?>