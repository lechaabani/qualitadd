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

        ],
    ]); ?>
</div>
