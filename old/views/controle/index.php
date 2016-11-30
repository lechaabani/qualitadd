<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ControleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contrôles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter un contrôle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
		<b><?php echo 'Favoris : '; ?></b>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Retraite individuelle"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="PREFON"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Public"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Prive"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="ERC"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:white"></span> <input type="submit" class="btn btn-primary" value="Actif"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Emprunteur"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Epargne"></span><?php echo '&nbsp;'; ?>


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
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            //'Frequence',
            // 'Statut',
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            [
			'attribute' => 'Application',
			'contentOptions' => [ 'style'=>'width: 10%'], 
			],
            // 'Etape',
            // 'Actions_a_effectuer_si_anomalie',
            // 'Exhaustivite',
            // 'Exactitude',
            // 'Pertinence',
            // 'Donnees_controlees',
            // 'Preuves',
            // 'Commentaires_preuves',
            // 'Documents',
            // 'Commentaires_documents',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
