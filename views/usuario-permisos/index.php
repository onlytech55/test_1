<?php

use app\models\UsuarioPermisos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\UsuarioPermisosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usuario Permisos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-permisos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario Permisos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_usuario_permiso',
            'id_usuario',
            'id_permiso',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, UsuarioPermisos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_usuario_permiso' => $model->id_usuario_permiso]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
