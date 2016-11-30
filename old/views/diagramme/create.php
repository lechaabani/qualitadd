<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Diagramme */

$this->title = Yii::t('app', 'Create Diagramme');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diagrammes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagramme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
