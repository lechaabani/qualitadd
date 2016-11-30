<?php

use yii\helpers\Html;
// use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\data\SqlDataProvider;
use app\models\Constatpiecejointe;
use app\models\ConstatpiecejointeSearch;
use yii\bootstrap\ActiveForm;

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
				return Html::a($data['Piece'],['site/index']);
			}
			],
 
 
            ['class' => 'yii\grid\ActionColumn',
            	'template'=>'{view}',
				'buttons'=>[
					'view' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', 
						['constatpiecejointe/view', 
							'id' => $model['Identifiant'],
							'title'=>'View',
						]);
					},
					'delete' => function ($url, $model, $key) {
						return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
						['constatpiecejointe/delete1', 
							'id_constatpiecejointe' => $model['Identifiant'],
							'id_constat' => $model['Id_constat'],
							'title'=>'Delete',
						]);
					},
				],
        	],
        ],
    ]); ?>
</div>

<!-- <?= Html::a('<span class="btn-label">Ajouter une pièce</span>', ['//constatpiecejointe/upload','id_constat' => $id_constat], ['class' => 'btn btn-success']) ?> -->

<?php $form = ActiveForm::begin(['action' => ['//constatpiecejointe/create']]) ?>

	<?php $model = new Constatpiecejointe(); ?>
	
	<?= $form->field($model, 'id_constat',['options' => ['value'=> 'C001'] ])->hiddenInput()->label(false) ?>
	
    <?= $form->field($model, 'piece')->fileInput()->label(false) ?>
	
	<?= Html::submitButton('Ajouter une pièce', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end() ?>