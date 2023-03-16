<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Comuna $model */

$this->title = 'Create Comuna';
$this->params['breadcrumbs'][] = ['label' => 'Comunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comuna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
