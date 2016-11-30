<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiagrammeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Diagrammes de flux');
$this->params['breadcrumbs'][] = $this->title;
?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://localhost/qualitadd/web/js/dndTree.js"></script>

<style type="text/css">
  
	.node {
    cursor: pointer;
  }

  .overlay{
	  border: 1px solid black;
  }
   
  .node circle {
    fill: #fff;
    stroke: steelblue;
    stroke-width: 1.5px;
  }
   
  .node text {
    font-size:10px; 
    font-family:sans-serif;
  }
   
  .link {
    fill: none;
    stroke: #ccc;
    stroke-width: 1.5px;
  }

  .templink {
    fill: none;
    stroke: red;
    stroke-width: 3px;
  }

  .ghostCircle.show{
      display:block;
  }

  .ghostCircle, .activeDrag .ghostCircle{
       display: none;
  }

</style>


<div class="diagramme-index">

    <h1><?= Html::encode($this->title) ?></h1>
	
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
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
	
	<?php
		//$donneeSource = array_map(create_function('$o', 'return [$o->id_source, $o->id_donnee];'), $list_data_source);
		/*foreach ($list_parent as $node_parent)
		{
			print($node_parent[1] . " || ");
		}
		print("<pre>".print_r($list_parent, true)."</pre>");*/
	?>
	
	<div id="tree-container"></div>
</div>