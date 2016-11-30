<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="campagnecontrolee-sublistview">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM controle right outer join controlecampagne on controle.identifiant = controlecampagne.id_controle 
	WHERE controlecampagne.id_campagne=:identifiant'
, [':identifiant' => $id_campagne])->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_campagne . '\' as Id_campagne, controle.* FROM controle right outer join controlecampagne on controle.identifiant = controlecampagne.id_controle 
	WHERE controlecampagne.id_campagne=:identifiant',
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
			
			['class' => 'yii\grid\ActionColumn',
            	'template'=>'{view}{delete1}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['controle/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete1' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['controlecampagne/delete1', 
							'id_controle' => $model['Identifiant'],
							'id_campagne' => $model['Id_campagne'],
						]);
					},
				],
    			
        	],
        ],
    ]); 
?>
	
<!-- <?= Html::a('Test', ['controlecampagne/index', 'id_campagne' => 'CT116'], ['class' => 'btn btn-primary']) ?> -->

    <?= Html::button('Ajouter un contrôle', ['value'=>Url::to(['controlecampagne/index','id_campagne' => $id_campagne]),'class'=>'btn btn-success', 'id'=>'modalButtonDC']) ?>
	<?php
		Modal::begin([
		        // 'header'=>'<h4>Contrôles Disponibles</h4>',
				'id'=>'modal',
				'size'=>'modal-lg',
			]);
			
			echo"<div id='modalContent'></div>";
			
			Modal::end();
	?>
</div>

