<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PermisosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permisos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_permiso') ?>

    <?= $form->field($model, 'id_rol') ?>

    <?= $form->field($model, 'id_comuna') ?>

    <?= $form->field($model, 'id_empresa') ?>

    <?= $form->field($model, 'id_etapa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
