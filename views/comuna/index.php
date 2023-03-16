<?php

use app\models\Comuna;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ComunaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comuna-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comuna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_comuna',
            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Comuna $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_comuna' => $model->id_comuna]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
