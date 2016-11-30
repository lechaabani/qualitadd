<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DonneeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Données');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donnee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Ajouter une donnée'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
	
		<br/>
		<b><?php echo 'Favoris : '; ?></b>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Retraite individuelle"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="PREFON"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Public"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Prev. Coll. Prive"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="ERC"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:white"></span> <input type="submit" class="btn btn-primary" value="Actif"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Emprunteur"></span><?php echo '&nbsp;'; ?>
		<span class="icon-input-btn"><span style="color:#474747"></span> <input type="submit" class="btn btn-secondary" value="Epargne"></span><?php echo '&nbsp;'; ?>
<br/><br/>
	
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
			'contentOptions' => [ 'style'=>'width: 20%'], 
			],
            //'Description',
            //'Code_systeme',
            //'Typologie',
            [
			'attribute' => 'Format',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Granularite',
            [
			'attribute' => 'Application',
			'contentOptions' => [ 'style'=>'width: 15%'], 
			],
            // 'Table',
            // 'Etape',
            // 'Mode_de_production',
            // 'Origine',
            // 'Frequence_de_mise_a_jour',
            [
			'attribute' => 'Responsable',
			'contentOptions' => [ 'style'=>'width: 19%'], 
			],
            // 'Commentaires',
            // 'Statut',
            // 'Justification',
            [
			'attribute' => 'Priorite',
			'contentOptions' => [ 'style'=>'width: 5%'], 
			],
            // 'Donnee_sensible',
            // 'Donnees_sources',
            // 'Controles_associes',
            // 'Plans_actions_associes',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
