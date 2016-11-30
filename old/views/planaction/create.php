<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planaction */

$this->title = 'Ajouter un plan d\'actions';
$this->params['breadcrumbs'][] = ['label' => 'Plan d\'actions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
