<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Domaine */

$this->title = 'Create Domaine';
$this->params['breadcrumbs'][] = ['label' => 'Domaines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Domaine-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
