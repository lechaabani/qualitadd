<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CampagneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campagnes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campagne-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter une campagne', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Identifiant',
            'Libelle',
            //'Description',
            'Statut',
			//'Date_de_debut',
			[
				'attribute' => 'Date_de_debut',
				'format' => ['date', 'php:d/m/Y'],
				'value' => function ($model) {
					return $model->Date_de_debut == 0 ? null : $model->Date_de_debut ;
				},
			], 
            // 'Date_de_derniere_pause',
            // 'Date_de_fin_effective',
			[
				'attribute' => 'Date_de_fin_effective',
				'format' => ['date', 'php:d/m/Y'],
				'value' => function ($model) {
					return $model->Date_de_fin_effective == 0 ? null : $model->Date_de_fin_effective ;
				},
			],
            // 'Date_de_fin_previsionnelle',
            // 'Entites_associees',
            // 'Controles_associes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
