<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ConstatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Constats';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ajouter un constat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Identifiant',
            'Libelle',
            //'Etape',
            'Priorite',
            'Applications_concernees',
            // 'Responsable',
            // 'Cree_le',
            // 'Cree_par',
            // 'Description',
            // 'Valide_le',
            // 'Valide_par',
            // 'Commentaires_du_valideur',
            // 'Plans_actions_associes',
            // 'Pieces_jointes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
