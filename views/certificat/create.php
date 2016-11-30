<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Certificat */

$this->title = 'Ajouter un certificat';
$this->params['breadcrumbs'][] = ['label' => 'Certificats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="certificat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
