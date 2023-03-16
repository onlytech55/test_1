<?php

namespace app\controllers;

use app\models\Etapa;
use app\models\EtapaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EtapaController implements the CRUD actions for Etapa model.
 */
class EtapaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Etapa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EtapaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Etapa model.
     * @param int $id_etapa Id Etapa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_etapa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_etapa),
        ]);
    }

    /**
     * Creates a new Etapa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Etapa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_etapa' => $model->id_etapa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Etapa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_etapa Id Etapa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_etapa)
    {
        $model = $this->findModel($id_etapa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_etapa' => $model->id_etapa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Etapa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_etapa Id Etapa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_etapa)
    {
        $this->findModel($id_etapa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Etapa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_etapa Id Etapa
     * @return Etapa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_etapa)
    {
        if (($model = Etapa::findOne(['id_etapa' => $id_etapa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
