<?php

use app\models\Etapa;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\EtapaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etapa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_etapa',
            'nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_etapa' => $model->id_etapa]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
