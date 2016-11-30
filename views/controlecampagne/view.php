<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Controlecampagne */

$this->title = $model->id_controle;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controlecampagnes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controlecampagne-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id_controle' => $model->id_controle, 'id_campagne' => $model->id_campagne], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id_controle' => $model->id_controle, 'id_campagne' => $model->id_campagne], [
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
            'id_controle',
            'id_campagne',
        ],
    ]) ?>

</div>
