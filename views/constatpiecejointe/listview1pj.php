<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;

?>

<div class="constatpiecejointe-sublistupdate1constat">

<?php 


$count = Yii::$app->db->createCommand('
    SELECT count(*) 
	FROM `constatpiecejointe` 
	LEFT OUTER JOIN constat on constatpiecejointe.id_constat = constat.identifiant
	where constat.identifiant = :identifiant',
	[':identifiant' => $id_constat])->queryScalar();


$provider = new SqlDataProvider([
    'sql' => 'SELECT \'' . $id_constat . '\' as Identifiant, constatpiecejointe.id_piece as Id_piece, constatpiecejointe.piece as Piece
	FROM constatpiecejointe
	LEFT OUTER JOIN constat on constatpiecejointe.id_constat = constat.identifiant
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
			'attribute' => 'Id_piece',
			//'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Piece',
			'contentOptions' => [ 'style'=>'width: 85%'],
			'format' => 'raw',
			'value'=>function ($data) {
				return Html::a($data['Piece'],['site/upload']);
			}
			],
        ],
    ]); ?>
</div>


