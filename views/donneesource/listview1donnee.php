<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="donneesource-sublistview1donnee">

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

        ],
    ]); ?>
</div>

