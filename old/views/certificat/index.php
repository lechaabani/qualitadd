<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CertificatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Certificats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter un certificat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Identifiant',
            //'Libelle',
            [
			'attribute' => 'Donnee',
			'contentOptions' => [ 'style'=>'width: 25%'], 
			],
            [
			'attribute' => 'Controle',
			'contentOptions' => [ 'style'=>'width: 25%'], 
			],
			[
			'attribute' => 'Campagne',
			'contentOptions' => [ 'style'=>'width: 25%'], 
			],
            // 'Critere_de_seuil',
            // 'Type_de_critere',
            // 'Seuil_Qualite_Moyenne',
            // 'Seuil_Qualite_Faible',
            // 'Resultat',
            [
			'attribute' => 'Evaluation',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Evaluation_forcee',
            // 'Analyse',
            // 'Remediation',
            // 'Justificatifs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
