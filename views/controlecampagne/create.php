<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Controlecampagne */

$this->title = Yii::t('app', 'Create Controlecampagne');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controlecampagnes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controlecampagne-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
