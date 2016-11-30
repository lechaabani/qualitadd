<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EntiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entités';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entite-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter une entité', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
