<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ConstatsourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $Id_constat string */

$this->title = 'Plans d\'actions disponibles' ;
$this->params['breadcrumbs'][] = $this->title ;

?>
<div class="constatplanaction-index">

    <h1><?= Html::encode($this->title) ?>: <?= $id_constat ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php echo Html::beginForm(
			['constatplanaction/create']
	); ?>
	
	<?php echo Html::hiddenInput('Id_constat',$id_constat)?>
    
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
			'attribute' => 'Identifiant',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Libelle',
			// 'contentOptions' => [ 'style'=>'width: 85%'], 
			],
            //'Description',
			/*
            [
			'attribute' => 'Type',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            [
			'attribute' => 'Description',
			'contentOptions' => [ 'style'=>'width: 25%'], 
			],
			*/
            ['class' => 'yii\grid\CheckBoxColumn'],
        		
        ],
    ]); ?>
    
   <?= Html::submitButton('Selectionner', ['class' => 'btn btn-success']) ?>

    <?php echo Html::endForm(); ?>
</div>




