<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Seuil */

$this->title = 'Ajouter un seuil';
$this->params['breadcrumbs'][] = ['label' => 'Seuils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seuil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
