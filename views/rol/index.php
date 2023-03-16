<?php

use app\models\Rol;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\RolSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

// echo "<pre>"; print_r($this);
// exit;
$this->title = 'Rol';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <h3><?= Html::encode($this->title) ?></h3>

        <p>
            <?= Html::a('Crear Rol', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>

        <?php Pjax::begin(); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    // ['class' => 'yii\grid\SerialColumn'],

                    'id_rol',
                    'nombre',
                    
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, rol $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id_rol' => $model->id_rol]);
                        }
                    ],
                   
                ],
            ]); ?>

        <?php Pjax::end(); ?>
    </div>
</div>
