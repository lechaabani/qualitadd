<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Constatpiecejointe */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Constatpiecejointe',
]) . $model->id_piece;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Constatpiecejointes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_piece, 'url' => ['view', 'id' => $model->id_piece]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="constatpiecejointe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
