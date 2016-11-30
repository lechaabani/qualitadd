<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DonneesourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $Id_donnee string */

$this->title = 'Entités disponibles' ;
$this->params['breadcrumbs'][] = $this->title ;

?>
<div class="donneeentite-index">

    <h1><?= Html::encode($this->title) ?>: <?= $id_donnee ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php echo Html::beginForm(
			['donneeentite/create']
	); ?>
	
	<?php echo Html::hiddenInput('Id_donnee',$id_donnee)?>
    
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

            ['class' => 'yii\grid\CheckBoxColumn'],
        		
        ],
    ]); ?>
    
   <?= Html::submitButton('Selectionner', ['class' => 'btn btn-success']) ?>

    <?php echo Html::endForm(); ?>
</div>




