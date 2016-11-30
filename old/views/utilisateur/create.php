<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Utilisateur */

$this->title = 'Ajouter un utilisateur';
$this->params['breadcrumbs'][] = ['label' => 'Utilisateurs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="utilisateur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
