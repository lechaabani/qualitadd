<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

AppAsset::register($this);

global $prev_content ;
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
 <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
	$current_content = $content ;
	
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
	
	/*
	if (Yii::$app->user->isGuest)  {
		
		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-left'],		
			'items' => [
				['label' => 'Login', 'url' => ['/site/login']],
				['label' => 'Signup', 'url' => ['/site/signup']],
			],
		]);
	} else {
	*/
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-left'],
				'encodeLabels' => false,
				'items' => [
				[
					'label' => 'Référentiel',
					'items' => [
						 ['label' => '<span class="glyphicon glyphicon-list-alt" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Données'), 'url' => ['/donnee/index'] ],
						 ['label' => '<span class="glyphicon glyphicon-object-align-horizontal" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Diagrammes de flux'), 'url' => ['/diagramme/index']],
						 ['label' => '<span class="glyphicon glyphicon-modal-window" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Organigramme'), 'url' => ['/organigramme/index']],
						 ['label' => '<span class="glyphicon glyphicon-search" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Contrôles'), 'url' => ['/controle/index']],
						 ['label' => '<span class="glyphicon glyphicon-asterisk" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Entités'), 'url' => ['/entite/index']],
						 ['label' => '<span class="glyphicon glyphicon-hdd" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Applications'), 'url' => ['/application/index']],
					],
				],

				[
					'label' => 'Dispositif',
					'items' => [
						 ['label' => '<span class="glyphicon glyphicon-calendar" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Campagnes'), 'url' => ['/campagne/index']],
						 ['label' => '<span class="glyphicon glyphicon-star-empty" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Certificats'), 'url' => ['/certificat/index']],
						 ['label' => '<span class="glyphicon glyphicon-align-center" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Constats'), 'url' => ['/constat/index']],
						 ['label' => '<span class="glyphicon glyphicon-list" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Plan d\'actions'), 'url' => ['/planaction/index']],
					],
				],

				[
					'label' => 'Reporting',
					'items' => [
						 ['label' => '<span class="glyphicon glyphicon-book" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Dictionnaire des données'),  'url' => ['reporting/index','report_file' => 'QualitAdd_Dictionnaire_Donnees_Actifs_2016.xlsx']],
						 ['label' => '<span class="glyphicon glyphicon-share-alt" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Référentiel de contrôle'), 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Referentiel_Controles_Actifs_2016.xlsx']],
						 ['label' => '<span class="glyphicon glyphicon-chevron-right" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Suivi des plans d\'actions'), 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Suivi_Plans_Actions_Actifs_2016.xlsx']],
						 ['label' => '<span class="glyphicon glyphicon-star" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Consolidation des certificats'), 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Consolidation_Certificats_Actifs_2016.xlsx']],
					],
				],
				
				[
					'label' => 'Administration',
					'items' => [
						 ['label' => '<span class="glyphicon glyphicon-user" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Utilisateurs et habilitations'), 'url' => ['/utilisateur/index']],
						 ['label' => '<span class="glyphicon glyphicon-save" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Imports'), 'url' => ['/import/index']],
						 ['label' => '<span class="glyphicon glyphicon-resize-horizontal" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Seuils'), 'url' => ['/seuil/index']],
						 ['label' => '<span class="glyphicon glyphicon-info-sign" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Profils'), 'url' => '#'],
						 ['label' => '<span class="glyphicon glyphicon-transfer" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Piste d\'audit'), 'url' => '#'],
					],
				],
				
				/*
				[
					'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
				],	
				*/

			],
		]);
		
	
		echo "<form class='navbar-form navbar-right' role='search'>
		   <div class='form-group has-feedback'>
				<input id='searchbox' type='text' placeholder='Rechercher' style='height:30px;' class='form-control'>
				<span id='searchicon' class='fa fa-search form-control-feedback'></span>
			</div>
		</form>";
	 
		echo "<div class='navbar-form navbar-right'><a href='#'><img src='http:/qualitadd/web/images/user.png' style='height:27px' /></a></div>";

	// }
	
    NavBar::end();
    ?>
	
 
	
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		<?php	
			if ($this->context->id == 'reporting') { 			
				echo $content ;			
			} else {
				echo $content ;
			} 
		?>

    </div>
	
</div>


<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; QualitAdd <?= date('Y') ?></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script>
function postdata(){
    $.post("Test", { report_file: "1", content: "2" },
       function(data) {
         alert("Data Loaded: " + data);
       });
}
</script>

