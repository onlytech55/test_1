<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\UsuarioPermisos $model */

$this->title = $model->id_usuario_permiso;
$this->params['breadcrumbs'][] = ['label' => 'Usuario Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuario-permisos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_usuario_permiso' => $model->id_usuario_permiso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_usuario_permiso' => $model->id_usuario_permiso], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_usuario_permiso',
            'id_usuario',
            'id_permiso',
        ],
    ]) ?>

</div>
