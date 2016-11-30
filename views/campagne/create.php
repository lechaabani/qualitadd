<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Campagne */

$this->title = 'Ajouter une campagne';
$this->params['breadcrumbs'][] = ['label' => 'Campagnes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campagne-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
