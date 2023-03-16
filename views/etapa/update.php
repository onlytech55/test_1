<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Etapa $model */

$this->title = 'Update Etapa: ' . $model->id_etapa;
$this->params['breadcrumbs'][] = ['label' => 'Etapas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_etapa, 'url' => ['view', 'id_etapa' => $model->id_etapa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etapa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
