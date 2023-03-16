<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\UsuarioPermisos $model */

$this->title = 'Update Usuario Permisos: ' . $model->id_usuario_permiso;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_usuario_permiso, 'url' => ['view', 'id_usuario_permiso' => $model->id_usuario_permiso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="usuario-permisos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
