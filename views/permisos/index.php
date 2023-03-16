<?php

use app\models\Permisos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PermisosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Permisos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permisos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Permisos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_permiso',
            'id_rol',
            'id_comuna',
            'id_empresa',
            'id_etapa',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Permisos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_permiso' => $model->id_permiso]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
