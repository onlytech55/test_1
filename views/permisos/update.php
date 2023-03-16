<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Permisos $model */

$this->title = 'Update Permisos: ' . $model->id_permiso;
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_permiso, 'url' => ['view', 'id_permiso' => $model->id_permiso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permisos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
