<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Rol;
use app\models\Etapa;
use app\models\Comuna;
use app\models\Empresa;
use app\models\Permisos;



/** @var yii\web\View $this */
/** @var app\models\Permisos $model */
/** @var yii\widgets\ActiveForm $form */

$model = Permisos::find()->where(['id_rol' => $id_rol])->one();
        
        if(empty($model))
            $model = new Permisos();
?>

<div class="permisos-form">
    <br>
    <div class="row">
        <
        <div class="col-md-10 mx-auto">

            <h4><?= Html::encode('Asignar permisos') ?></h4>
        </div>
    <div>
    <br>

    <?php $form = ActiveForm::begin(['action' =>'../permisos/create-detalle']); ?>

        <input type="hidden" name="id_rol" id="id_rol" value="<?=$id_rol?>">
    
        <br>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for="">Comuna:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_comuna')->dropDownList(
                    ArrayHelper::map(Comuna::find()->all(), 'id_comuna', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            <div class="col-md-2 mx-auto">
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for="">Etapa:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_etapa')->dropDownList(
                    ArrayHelper::map(Etapa::find()->all(), 'id_etapa', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            <div class="col-md-2 mx-auto">
            </div>

        </div>
        <br>

        <div class="row">
            <div class="col-md-2 mx-auto">
                <label class="control-label" for="">Empresa:</label>
            </div>
            <div class="col-md-4 mx-auto">
                <?= $form->field($model, 'id_empresa')->dropDownList(
                    ArrayHelper::map(Empresa::find()->all(), 'id_empresa', 'nombre'),
                    ['prompt' => 'Seleccione']
                )->label(false);
                ?>
            </div>
            <div class="col-md-2 mx-auto">
            </div>
            
        </div>
        
    </div>

   <br>
   
    <div class="row">
    <br>

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
