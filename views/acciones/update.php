<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Acciones $model */

$this->title = 'Update Acciones: ' . $model->id_accion;
$this->params['breadcrumbs'][] = ['label' => 'Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_accion, 'url' => ['view', 'id_accion' => $model->id_accion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="acciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
