<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioPermisos $model */

$this->title = 'Create Usuario Permisos';
$this->params['breadcrumbs'][] = ['label' => 'Usuario Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-permisos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
