<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Controle */

$this->title = 'Ajouter un contrôle ';
$this->params['breadcrumbs'][] = ['label' => 'Controles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
