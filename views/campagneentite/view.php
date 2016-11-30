<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Campagneentite */

$this->title = $model->id_campagne;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campagneentites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campagneentite-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_campagne' => $model->id_campagne, 'id_entite' => $model->id_entite], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_campagne' => $model->id_campagne, 'id_entite' => $model->id_entite], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_campagne',
            'id_entite',
        ],
    ]) ?>

</div>