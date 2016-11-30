<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Constat */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Constats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editer', ['update', 'id' => $model->Identifiant], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Supprimer', ['delete', 'id' => $model->Identifiant], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Définition'; ?></font></b><HR></div>
	
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Identifiant',
            'Libelle',
            'Etape',
            'Priorite',
            'Applications_concernees',
            'Responsable',
        ],
    ]) ?>
	
<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Caractéristiques'; ?></font></b><HR></div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Cree_le',
            'Cree_par',
            'Description',
            'Valide_le',
            'Valide_par',
            'Commentaires_du_valideur',
        ],
    ]) ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Plans d\'actions'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//constatplanaction/listview1planaction', array('id_constat'=>$model->Identifiant)); ?>

<div style="background:#f2f8f8;"><HR><b><font size="5" color="#033734"><?php echo '&nbsp; Pièces jointes'; ?></font></b><HR></div>

	<?= Yii::$app->view->render('//constatpiecejointe/listview1pj', array('id_constat'=>$model->Identifiant)); ?>
	
</div>
