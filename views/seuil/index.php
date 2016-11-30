<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeuilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Seuils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seuil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter un seuil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'Identifiant',
            //'Seuil_Qualite_Faible',
            // 'Seuil_Qualite_Moyenne',
			'Donnee',
			'Controle',
            'Type_de_critere',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
