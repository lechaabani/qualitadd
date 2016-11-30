<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DonneesourceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $Id_donnee string */


Modal::begin([
	'id' => 'modal',
	'size'=>'modal-lg',
	// 'closeButton' => ['label' => 'Valider'],
]);


$this->title = 'Veuillez choisir une entité' ;
$this->params['breadcrumbs'][] = $this->title ;

?>
<div class="donneeentite-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

	<?php echo Html::beginForm(
			['reporting/download']
	); ?>
	
	<?php echo Html::hiddenInput('report_file',$report_file); ?>
    
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
    
   <?= Html::submitButton('Valider',
		['class' => 'btn btn-success','onclick'=>'javascript:window.close();']
		) 
	?>

    <?php echo Html::endForm(); ?>
</div>

<?php
	Modal::end();
?>




