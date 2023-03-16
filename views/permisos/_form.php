<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Rol;
use app\models\Etapa;
use app\models\Comuna;
use app\models\Empresa;


/** @var yii\web\View $this */
/** @var app\models\Permisos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="permisos-form">

    <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for=""><?= $model->attributeLabels()['id_rol'] ?>:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_rol')->dropDownList(
                    ArrayHelper::map(Rol::find()->all(), 'id_rol', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for=""><?= $model->attributeLabels()['id_comuna'] ?>:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_comuna')->dropDownList(
                    ArrayHelper::map(Comuna::find()->all(), 'id_comuna', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for=""><?= $model->attributeLabels()['id_etapa'] ?>:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_etapa')->dropDownList(
                    ArrayHelper::map(Etapa::find()->all(), 'id_etapa', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            
        </div>
        <br>

        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for=""><?= $model->attributeLabels()['id_empresa'] ?>:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_empresa')->dropDownList(
                    ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            
        </div>
        
    </div>

   <br><br>
   
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2 ">
            <div class="form-group">
                <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary']) ?>
            </div>
        </div>
       
    </div>
    <?php ActiveForm::end(); ?>

</div>
