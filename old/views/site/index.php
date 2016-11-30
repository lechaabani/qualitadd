<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'QualitAdd';

?>

<div class="site-index">
	
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar', 'corechart']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
        ["", "Avancement des certificats (%)", { role: "style" } ],
		  ["Avancement Moyen", 59, "#52a09a"],
          ["RTEV", 67, "#135550"],
          ["Retraite individuelle", 43, "#135550"],
          ["Epargne", 77, "#135550"],
          ["PREFON", 30, "#135550"],
		  ["ERC", 100, "#135550"],
		  ["Actifs", 12, "#135550"],
		  ["Emprunteur", 54, "#135550"],
		  ["Prev. Coll. Public", 70, "#135550"],
		  ["Prev. Coll. Prive", 82, "#135550"],
        ]);

        var options = {
          title: 'Avancement des certificats (en %)',
          width: 900,
          legend: { position: 'none' },
          bars: 'horizontal', // Required for Material Bar Charts.
		  colors: ['#00ada2'],
          axes: {
            x: {
              0: { side: 'bottom', label: 'Avancement (en %)'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
	<script type="text/javascript">

      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Qualité des données (en %)'],
          ['Qualité élevée',     66,],
          ['Qualité moyenne',      10],
          ['Qualité faible',  3],
          ['N/A', 21],
        ]);

        var options = {
          pieHole: 0.4,
		  colors: ['#06b253', '#e3b517', '#f74d40', '#b2b1b1'],
		  
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      };
    </script>
	
	<script type="text/javascript">
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
   // Define the chart to be drawn.
    var data = google.visualization.arrayToDataTable([
      ['Campagne', 'Qualité élevée', 'Qualité moyenne et faible', 'N/A'],
      ['Campagne T2 2016',  66, 13, 21],
	  ['Campagne T1 2016',  78, 19, 3],
	  ['Campagne T4 2015',  69, 27, 4],
      ]);

    var options = {
	  colors: ['#06b253', '#f17836', '#b2b1b1'],
      isStacked:'percent'  
   };  

   // Instantiate and draw the chart.
   var chart = new google.visualization.BarChart(document.getElementById('container'));
   chart.draw(data, options);
}
</script>
	
	<script type="text/javascript">

      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Date d\'identification'],
          ['Moins de 6 mois',     47,],
          ['Entre 2 et 6 mois',      34],
          ['Plus de 6 mois',  19],

        ]);

        var options = {
          pieHole: 0.4,
		  colors: ['#03847c', '#00ada2', '#66cfc8'],
		  
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      };
    </script>

  </head>
  <body>
  <table width=90%><tr><td>
    <div style="background:#5bb0ab;"><HR><b><font size="5" color="#FFFFFF"><?php echo '&nbsp; Bienvenue dans l\'outil MAQDO'; ?></font></b><HR></div>
	</td></tr></tr><tr><td>
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Evolution de la qualité des données par campagne'; ?></font></b><HR></div>
	<div id="container" style="width: 900px; height: 300px;"></div>
	</td></tr><tr><td>
	<table><tr>
	<td>
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Plans d\'action par date d\'identification'; ?></font></b><HR></div>
	<div id="donutchart2" style="width: 560px; height: 400px;"></div>
	</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>
	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Qualité des données - Campagne T2 2016'; ?></font></b><HR></div>
	<div id="donutchart" style="width: 560px; height: 400px;"></div>
	</td></tr>
	</table>
	</td></tr><tr><td>
  	<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Avancement des certificats - Campagne T2 2016'; ?></font></b><HR></div>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
	</td></table>
  </body>


</div>
