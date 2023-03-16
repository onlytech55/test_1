<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\rol $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="rol-form">

    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-2">
                <label class="control-label" for=""><?= $model->attributeLabels()['nombre'] ?></label>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'nombre')->textInput(['maxlength' => true])->label(false) ?>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        
    </div>
    <?php ActiveForm::end(); ?>

</div>
