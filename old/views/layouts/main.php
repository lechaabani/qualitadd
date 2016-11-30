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
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [
		      
        //if (Yii::$app->user->isGuest == false)  {
        //    ['label' => 'Login', 'url' => ['/site/login']],
        //} else {
        [
				'label' => 'Référentiel',
				'items' => [
					 ['label' => 'Données', 'url' => ['/donnee/index']],
					 ['label' => 'Diagrammes de flux', 'url' => ['/diagramme/index']],
					 ['label' => 'Contrôles', 'url' => ['/controle/index']],
					 ['label' => 'Entités', 'url' => ['/entite/index']],
					 ['label' => 'Applications', 'url' => ['/application/index']],
				],
			],

			[
				'label' => 'Dispositif',
				'items' => [
					 ['label' => 'Campagnes', 'url' => ['/campagne/index']],
					 ['label' => 'Certificats', 'url' => ['/certificat/index']],
					 ['label' => 'Constats', 'url' => ['/constat/index']],
					 ['label' => 'Plans d\'action', 'url' => ['/planaction/index']],
				],
			],

			[
				'label' => 'Reporting',
				'items' => [
					 ['label' => 'Dictionnaire des données', 'class' => 'modalContent', 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Dictionnaire_Donnees_Actifs_2016.xlsx']],
					 ['label' => 'Référentiel des contrôles', 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Referentiel_Controles_Actifs_2016.xlsx']],
					 ['label' => 'Suivi des plans d\'actions', 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Suivi_Plans_Actions_Actifs_2016.xlsx']],
					 ['label' => 'Consolidation des certificats', 'url' => ['reporting/index', 'report_file' => 'QualitAdd_Consolidation_Certificats_Actifs_2016.xlsx']],
				],
			],
			
			[
				'label' => 'Administration',
				'items' => [
					 ['label' => 'Utilisateurs et habilitations', 'url' => ['/utilisateur/index']],
					 ['label' => 'Imports', 'url' => '#'],
					 ['label' => 'Seuils', 'url' => ['/seuil/index']],
					 ['label' => 'Profils', 'url' => '#'],
					 ['label' => 'Piste d\'audit', 'url' => '#'],
				],
			],
		//}
              
        ],
    ]);
	
	echo "<form class='navbar-form navbar-right' role='search'>
       <div class='form-group has-feedback'>
            <input id='searchbox' type='text' placeholder='Rechercher' style='height:30px;' class='form-control'>
            <span id='searchicon' class='fa fa-search form-control-feedback'></span>
        </div>
  </form>";
 
	echo "<div class='navbar-form navbar-right'><img src='images/user.png' style='height:30px' /></div>;"

	;
	
    NavBar::end();
    ?>
	
 
	
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
		
		<?php
		
			// var_dump($this->context->id);
			
			// tentative d'ouverture en mode popup du reporting  

			if ($this->context->id == 'reportingXXX') {
				
				Modal::begin([
						'id'=>'modal',
						'size'=>'modal-lg',
						'toggleButton' => ['label' => 'click me'],
					]);
					
					echo $content ;
				
				Modal::end();
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



