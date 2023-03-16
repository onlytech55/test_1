<?php

namespace app\controllers;

use app\models\RolUsuarios;
use app\models\RoUsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RolUsuariosController implements the CRUD actions for RolUsuarios model.
 */
class RolUsuariosController extends Controller
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
     * Lists all RolUsuarios models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RoUsuariosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RolUsuarios model.
     * @param int $id_rol_usuario Id Rol Usuario
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_rol_usuario)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_rol_usuario),
        ]);
    }

    /**
     * Creates a new RolUsuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new RolUsuarios();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_rol_usuario' => $model->id_rol_usuario]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RolUsuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_rol_usuario Id Rol Usuario
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_rol_usuario)
    {
        $model = $this->findModel($id_rol_usuario);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_rol_usuario' => $model->id_rol_usuario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RolUsuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_rol_usuario Id Rol Usuario
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_rol_usuario)
    {
        $this->findModel($id_rol_usuario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RolUsuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_rol_usuario Id Rol Usuario
     * @return RolUsuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_rol_usuario)
    {
        if (($model = RolUsuarios::findOne(['id_rol_usuario' => $id_rol_usuario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
