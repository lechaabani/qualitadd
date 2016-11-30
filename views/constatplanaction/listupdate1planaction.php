<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="constatplanaction-sublistupdate1constat">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT count(*) 
	FROM `constatplanaction` 
	LEFT OUTER JOIN constat on constatplanaction.id_constat = constat.identifiant
	LEFT OUTER JOIN planaction on planaction.identifiant = constatplanaction.id_planaction
	where constat.identifiant = :identifiant',
	[':identifiant' => $id_constat])->queryScalar();


$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_constat . '\' as Id_constat, planaction.*
	FROM constatplanaction
	LEFT OUTER JOIN constat on constatplanaction.id_constat = constat.identifiant
	LEFT OUTER JOIN planaction on planaction.identifiant = constatplanaction.id_planaction	
	where constat.identifiant  = :identifiant',
    'params' => [':identifiant' => $id_constat],
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
			// 'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Libelle',
			// 'contentOptions' => [ 'style'=>'width: 45%'], 
			],
            //'Description',
			/*
            [
			'attribute' => 'Type',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            */


            ['class' => 'yii\grid\ActionColumn',
            	'template'=>'{view}{delete1}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['planaction/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete1' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['constatplanaction/delete1', 
							'id_planaction' => $model['Identifiant'],
							'id_constat' => $model['Id_constat'],
							'title'=>'Delete',
						]);
					},
				],
        	],
        ],
    ]); ?>
</div>


<!-- <?= Html::a('Test', ['constatplanaction/index', 'id_constat' =>  $id_constat], ['class' => 'btn btn-primary']) ?> -->

<?= Html::button('Ajouter un plan d\'actions', ['value'=>Url::to(['constatplanaction/index','id_constat' => $id_constat]),'class'=>'btn btn-success', 'id'=>'modalButtonDR']) ?>
<?php
	Modal::begin([
			// 'header'=>'<h4>Données sources</h4>',
			'id'=>'modal',
			'size'=>'modal-lg',
		]);
		
		echo"<div id='modalContent'></div>";
		
		Modal::end();
?>