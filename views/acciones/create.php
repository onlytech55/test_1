<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Acciones $model */

$this->title = 'Create Acciones';
$this->params['breadcrumbs'][] = ['label' => 'Acciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
