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

        ],
    ]); ?>
</div>
