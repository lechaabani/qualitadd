<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Entitedomaine */

$this->title = Yii::t('app', 'Create Entitedomaine');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Entitedomaines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donneeentite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
