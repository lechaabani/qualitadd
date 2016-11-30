<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Donnee */

$this->title = Yii::t('app', 'Ajouter une donnée');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Données'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donnee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
