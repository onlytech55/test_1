<?php

use yii\helpers\Html;
use app\models\Permisos;

/** @var yii\web\View $this */
/** @var app\models\rol $model */

$this->title = 'Actualizar Rol: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Rol', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id_rol' => $model->id_rol]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>

<div class="row">
    <div class="col-md-12">
        <h3><?= Html::encode($this->title) ?></h3>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
<br>

</div>

<div class="row">
   
    <div class="col-md-12">


        <?= $this->render('/permisos/_form_detalle', [
            'id_rol' => $model->id_rol, 
        ]) ?>
    </div>
</div>
