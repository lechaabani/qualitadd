<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Constatplanaction */

$this->title = Yii::t('app', 'Create Constatplanaction');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Constatplanactions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="constatplanaction-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
