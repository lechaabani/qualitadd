<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="donneecontrolee-sublistview">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM controle right outer join controledonnee on controle.identifiant = controledonnee.id_controle 
	WHERE controledonnee.id_donnee=:identifiant'
, [':identifiant' => $id_donnee])->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_donnee . '\' as Id_donnee, controle.* FROM controle right outer join controledonnee on controle.identifiant = controledonnee.id_controle 
	WHERE controledonnee.id_donnee=:identifiant',
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
            // 'Donnees_controlees',
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
						['controledonnee/delete1', 
							'id_controle' => $model['Identifiant'],
							'id_donnee' => $model['Id_donnee'],
						]);
					},
				],
    			
        	],
        ],
    ]); ?>
	
<!-- <?= Html::a('Test', ['controledonnee/index', 'id_donnee' => 'ACT_P_004'], ['class' => 'btn btn-primary']) ?> -->

    <?= Html::button('Ajouter un contrôle', ['value'=>Url::to(['controledonnee/index','id_donnee' => $id_donnee]),'class'=>'btn btn-success', 'id'=>'modalButtonDC']) ?>
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

