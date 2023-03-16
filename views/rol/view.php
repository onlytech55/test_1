<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\rol $model */
$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Rol', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rol-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_rol' => $model->id_rol], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_rol' => $model->id_rol], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar éste ítem?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rol',
            'nombre',
        ],
    ]) ?>

</div>
