<?php

use app\models\Acciones;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\AccionesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Acciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="acciones-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Acciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_accion',
            'descripcion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Acciones $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_accion' => $model->id_accion]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
