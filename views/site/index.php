<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'QualitAdd';

?>

  <!--<head>


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


</head>-->

<div class="site-index">
<body>

  <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-three">
                   <div class="bg-icon pull-left">
                       <i class="ti-bookmark-alt"></i>
                   </div>
                     <div class="text-right">
                         <p class="text-success m-t-5 text-uppercase font-600 font-secondary">Données priorisées</p>
                         <h2 class="m-b-10"><span data-plugin="counterup">5</span></h2>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-three">
                     <div class="bg-icon pull-left">
                         <i class="ti-bookmark-alt"></i>
                     </div>
                     <div class="text-right">
                         <p class="text-pink m-t-5 text-uppercase font-600 font-secondary">Données référencées</p>
                         <h2 class="m-b-10"><span data-plugin="counterup">22</span></h2>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-three">
                     <div class="bg-icon pull-left">
                         <i class="ti-crown"></i>
                     </div>
                     <div class="text-right">
                         <p class="text-purple m-t-5 text-uppercase font-600 font-secondary">Contrôles référencés</p>
                         <h2 class="m-b-10"><span data-plugin="counterup">8</span></h2>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-three">
                     <div class="bg-icon pull-left">
                         <i class="ti-agenda"></i>
                     </div>
                     <div class="text-right">
                         <p class="text-warning m-t-5 text-uppercase font-600 font-secondary">Plans d'action suivis</p>
                         <h2 class="m-b-10"><span data-plugin="counterup">6</span></h2>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-two widget-two-primary">
                     <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                     <div class="wigdet-two-content">
                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Qualité élevée </br><strong>exhaustivité</strong></p>
                         <h2><span data-plugin="counterup">71.2</span> %<small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                         <p class="text-muted m-0"><b>Campagne précédente:</b> 67.4%</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-two widget-two-primary">
                     <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                     <div class="wigdet-two-content">
                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Qualité élevée </br><strong>exactitude</strong></p>
                         <h2><span data-plugin="counterup">82.4</span> %<small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                         <p class="text-muted m-0"><b>Campagne précédente:</b> 85.7%</p>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-two widget-two-primary">
                     <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                     <div class="wigdet-two-content">
                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Qualité élevée </br><strong>pertinence</strong></p>
                         <h2><span data-plugin="counterup">77.3</span> %<small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                         <p class="text-muted m-0"><b>Campagne précédente:</b> 75.8%</p>
                     </div>
                 </div>
             </div>





             <div class="col-lg-3 col-md-6">
                 <div class="card-box widget-box-two widget-two-success">
                     <i class="mdi mdi-account-convert widget-two-icon"></i>
                     <div class="wigdet-two-content">
                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Qualité élevée </br><strong>total</strong></p>
                         <h2><span data-plugin="counterup">76.9</span> %<small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                         <p class="text-muted m-0"><b>Campagne précédente:</b> 76.3%</p>
                     </div>
                 </div>
             </div>

         </div>


         <div class="row">
             <div class="col-lg-6">
                 <div class="card-box">
                     <h4 class="header-title m-t-0 m-b-30">Evolution de la qualité des données sur les six dernières campagnes (%)</h4>

                     <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="card-box">
                     <h4 class="header-title m-t-0">Campagne T3 2016 - Répartition de la qualité des données</h4>

                     <div class="pull-right m-b-30">
                         <!--<div id="reportrange" class="form-control">
                             <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                             <span></span>
                         </div>-->
                     </div>
                     <div class="clearfix"></div>

                     <div id="donut-chart">
                         <div id="donut-chart-container" class="flot-chart" style="height: 255px;">
                         </div>
                     </div>

                     <p class="text-muted m-b-0 m-t-15 font-13 text-overflow">&nbsp;</p>
                     <p class="text-muted m-b-0 m-t-15 font-13 text-overflow">&nbsp;</p>
                 </div>
             </div>

         </div>

         <div class="row">
            <div class="col-sm-12">
             <div class="card-box">
                 <table class="table table-striped">
                     <thead>
                         <tr>
                             <th>Domaine</th>
                             <th>Dernière mise à jour</th>
                             <th>Avancement des certificats - Campagne T3 2016</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Emprunteur</td>
                             <td>11/11/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                         42%
                                         <span class="sr-only">42% Complete (success)</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Actif</td>
                             <td>28/10/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100" style="width: 9%">
                                         9%<span class="sr-only">9% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>PREFON</td>
                             <td>08/11/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                         84%<span class="sr-only">84% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Prévoyance individuelle</td>
                             <td>15/11/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%">
                                        67% <span class="sr-only">67% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>

                         <tr>
                             <td>Prévoyance collective</td>
                             <td>02/11/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                         55%
                                         <span class="sr-only">55% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Retraite</td>
                             <td>15/11/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="19" aria-valuemin="0" aria-valuemax="100" style="width: 19%">
                                        19% <span class="sr-only">19% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Epargne</td>
                             <td>31/10/2016</td>
                             <td>
                                 <div class="progress">
                                     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%">
                                         96%<span class="sr-only">96% Complete</span>
                                     </div>
                                 </div>
                             </td>
                         </tr>

                     </tbody>
                 </table>
             </div>
           </div>
         </div>
         <div class="row">
             <div class="col-sm-12">
                 <div class="card-box">
                     <h4 class="m-t-0 header-title"><b>Ma liste de tâches</b></h4>
                     <p class="text-muted m-b-30 font-13">
                                   </p>
                     <table class="table" width="100%">
                         <thead>
                             <tr>
                                 <th style="min-width:50%;">Tâches</th>
                                 <th style="min-width:50%;">Echeances</th>
                                 <th >Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="middle-align">Soumettre le certificat : <strong>C001</strong></td>
                                 <td>31/12/2016</td>
                                 <td>
                                     <a href="http://localhost/qualitadd/web/index.php?r=certificat%2Fupdate&id=C001" style="color: #FFFFFF;text-decoration: none;"> <button class="btn btn-primary waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="middle-align">Soumettre le certificat : <strong>C004</strnog></td>
                                 <td>31/12/2016</td>
                                 <td>
                                    <a href="http://localhost/qualitadd/web/index.php?r=certificat%2Fupdate&id=C004" style="color: #FFFFFF;text-decoration: none;"> <button class="btn btn-primary waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>
                             <tr>
                                 <td class="middle-align">Valider le constat : <strong>C001</strong></td>
                                 <td>N/A</td>
                                 <td>
                                     <a href="http://localhost/qualitadd/web/index.php?r=constat%2Fupdate&id=C001" style="color: #FFFFFF;text-decoration: none;"> <button class="btn btn-warning waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>

                             <tr>
                                 <td class="middle-align">Valider le plan d'action : <strong>PA-Actif-1</strong></td>
                                 <td>N/A</td>
                                 <td>
                                    <a href="http://localhost/qualitadd/web/index.php?r=planaction%2Fupdate&id=PA-Actif-1" style="color: #FFFFFF;text-decoration: none;"><button class="btn btn-success waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>

                             <tr>
                                 <td class="middle-align">Valider le constat : <strong>C002</strong></td>
                                 <td>N/A</td>
                                 <td>
                                    <a href="http://localhost/qualitadd/web/index.php?r=constat%2Fupdate&id=C002" style="color: #FFFFFF;text-decoration: none;"><button class="btn btn-warning waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>

                             <tr>
                                 <td class="middle-align">Valider le plan d'action : <strong>PA-Actif-2</strong></td>
                                 <td>N/A</td>
                                 <td>
                                     <a href="http://localhost/qualitadd/web/index.php?r=planaction%2Fupdate&id=PA-Actif-2" style="color: #FFFFFF;text-decoration: none;"><button class="btn btn-success waves-effect waves-light btn-sm" id="sa-image" style="float: right;">Accéder</button></a>
                                 </td>
                             </tr>

                         </tbody>
                     </table>
                 </div>
             </div>
         </div>

        <!-- <div class="container-fluid" style="background: #cecece;">
           <div class="row text-center">
             <p> © QualitAdd 2016-support@qualitadd.com-<a href ="GUIDE%20UTILISATEUR%20VProjet%202016_11_15.pdf" target="_blank">Cliquez ici</a> pour télécharger le guide utilisateur</p>
           </div>
         </div>-->


      <!--   <div class="footer-bottom">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                         <div class="copyright" style="backgroundColor: blue;">
                             © QualitAdd 2016-support@qualitadd.com-<a href ="GUIDE%20UTILISATEUR%20VProjet%202016_11_15.pdf" target="_blank">Cliquez ici</a> pour télécharger le guide utilisateur
</div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
</div>
                 </div>
             </div>
         </div>-->




     </div>



























<!--
  <script>
      var resizefunc = [];
  </script>
-->


  <script type="text/javascript" src="plugins/d3/d3.min.js"></script>
  <script type="text/javascript" src="plugins/c3/c3.min.js"></script>
  <script src="assets/pages/jquery.c3-chart.init.js"></script>

<!--
  <script src="assets/js/jquery.min.js"></script>


  <script src="assets/js/detect.js"></script>
  <script src="assets/js/fastclick.js"></script>
  <script src="assets/js/jquery.blockUI.js"></script>
  <script src="assets/js/waves.js"></script>
  <script src="assets/js/jquery.slimscroll.js"></script>
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="plugins/switchery/switchery.min.js"></script>

  <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
  <script src="plugins/counterup/jquery.counterup.min.js"></script>

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
-->





</body>
</div>
