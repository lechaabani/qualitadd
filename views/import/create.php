<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Import */

$this->title = Yii::t('app', 'Create Import');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="import-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
