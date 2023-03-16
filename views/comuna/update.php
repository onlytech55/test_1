<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Comuna $model */

$this->title = 'Update Comuna: ' . $model->id_comuna;
$this->params['breadcrumbs'][] = ['label' => 'Comunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_comuna, 'url' => ['view', 'id_comuna' => $model->id_comuna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comuna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
