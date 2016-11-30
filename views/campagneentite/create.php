<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campagneentite */

$this->title = Yii::t('app', 'Create Campagneentite');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Campagneentites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campagneentite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
