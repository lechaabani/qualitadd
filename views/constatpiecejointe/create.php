<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Constatpiecejointe */

$this->title = Yii::t('app', 'Create Constatpiecejointe');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Constatpiecejointes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constatpiecejointe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
