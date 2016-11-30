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
