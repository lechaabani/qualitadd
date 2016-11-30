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
 <link href="plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">


 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="css/core.css" rel="stylesheet" type="text/css" />
 <link href="css/components.css" rel="stylesheet" type="text/css" />
 <link href="css/icons.css" rel="stylesheet" type="text/css" />
 <link href="css/pages.css" rel="stylesheet" type="text/css" />
 <link href="css/menu.css" rel="stylesheet" type="text/css" />
 <link href="css/responsive.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
 <link href="plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

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
                                                 ['label' => '<span class="glyphicon glyphicon-star" style="color:#45637D"></span>' . '&nbsp; &nbsp;' . Html::encode('Domaines'), 'url' => ['/domaine/index']],
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

<!--
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; QualitAdd  date('Y') </p>

    </div>
</footer>
-->

<div class="container-fluid" style="background: #f5f5f5; padding-top: 7px;">
  <div class="row text-center">
    <p> © QualitAdd 2016 - support@qualitadd.com - <a href ="GUIDE%20UTILISATEUR%20VProjet%202016_11_15.pdf" target="_blank">Cliquez ici</a> pour télécharger le guide utilisateur</p>
  </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!--
<script>
function postdata(){
    $.post("Test", { report_file: "1", content: "2" },
       function(data) {
         alert("Data Loaded: " + data);
       });
}
</script>
-->





<!--
<script>
    var resizefunc = [];
</script>
-->



<!--<script type="text/javascript" src="plugins/d3/d3.min.js"></script>-->

<!--<script type="text/javascript" src="plugins/c3/c3.min.js"></script>-->
<!--<script src="assets/pages/jquery.c3-chart.init.js"></script>-->


<script src="assets/js/jquery.min.js"></script>



<!--
<script src="assets/js/bootstrap.min.js"></script> -->

<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="plugins/switchery/switchery.min.js"></script>

<script src="plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>


<script src="plugins/flot-chart/jquery.flot.min.js"></script>
<script src="plugins/flot-chart/jquery.flot.time.js"></script>
<script src="plugins/flot-chart/jquery.flot.pie.js"></script>
<script src="plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="plugins/flot-chart/jquery.flot.resize.js"></script>

<script src="plugins/flot-chart/jquery.flot.selection.js"></script>
<script src="plugins/flot-chart/jquery.flot.crosshair.js"></script>

<script src="plugins/moment/moment.js"></script>
<script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>



<script src="assets/pages/jquery.dashboard_2.js"></script>


<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script>
    $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
    $('#reportrange').daterangepicker({
        format: 'MM/DD/YYYY',
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2016',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-success',
        cancelClass: 'btn-default',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });
</script>
