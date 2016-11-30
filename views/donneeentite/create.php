<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Donneeentite */

$this->title = Yii::t('app', 'Create Donneeentite');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Donneeentites'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donneeentite-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
