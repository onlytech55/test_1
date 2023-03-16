<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Permisos $model */

$this->title = $model->id_permiso;
$this->params['breadcrumbs'][] = ['label' => 'Permisos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="permisos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_permiso' => $model->id_permiso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_permiso' => $model->id_permiso], [
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
            'id_permiso',
            'id_rol',
            'id_comuna',
            'id_empresa',
            'id_etapa',
        ],
    ]) ?>

</div>
