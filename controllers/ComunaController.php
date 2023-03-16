<?php

namespace app\controllers;

use app\models\Comuna;
use app\models\ComunaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComunaController implements the CRUD actions for Comuna model.
 */
class ComunaController extends Controller
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
     * Lists all Comuna models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ComunaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comuna model.
     * @param int $id_comuna Id Comuna
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_comuna)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_comuna),
        ]);
    }

    /**
     * Creates a new Comuna model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Comuna();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_comuna' => $model->id_comuna]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Comuna model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_comuna Id Comuna
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_comuna)
    {
        $model = $this->findModel($id_comuna);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_comuna' => $model->id_comuna]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Comuna model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_comuna Id Comuna
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_comuna)
    {
        $this->findModel($id_comuna)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Comuna model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_comuna Id Comuna
     * @return Comuna the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_comuna)
    {
        if (($model = Comuna::findOne(['id_comuna' => $id_comuna])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
