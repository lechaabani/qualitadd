<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Donneesource */

$this->title = 'Create Donneesource';
$this->params['breadcrumbs'][] = ['label' => 'Donneesources', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donneesource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
