<?php

namespace app\controllers;

use app\models\Permisos;

use app\models\Rol;
use app\models\RolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class RolController extends Controller
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
     * Lists all rol models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RolSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single rol model.
     * @param int $id_rol Id Rol
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_rol)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_rol),
        ]);
    }

    /**
     * Creates a new rol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new rol();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_rol' => $model->id_rol]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing rol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_rol Id Rol
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_rol)
    {
        $permisos = Permisos::find()->where(['id_rol' => $id_rol]);
        
        if(empty($permisos))
            $permisos = new Permisos();

        $model = $this->findModel($id_rol);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['update', 'id_rol' => $model->id_rol, 'permisos' => $permisos]);
        }

        return $this->render('update', [
            'model' => $model,
            'permisos' => $permisos, 
        ]);
    }

    /**
     * Deletes an existing rol model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_rol Id Rol
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_rol)
    {
        $this->findModel($id_rol)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the rol model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_rol Id Rol
     * @return rol the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_rol)
    {
        if (($model = rol::findOne(['id_rol' => $id_rol])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
