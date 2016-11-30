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


<div class="donneecontrolee-sublistview">

<?php 


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

// var_dump($models);

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

