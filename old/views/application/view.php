<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Application */

$this->title = $model->Identifiant;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-view">

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
            'Description',
            'Responsable',
            'Origine',
        ],
    ]) ?>

</div>