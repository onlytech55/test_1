<?php

namespace app\controllers;

use app\models\UsuarioPermisos;
use app\models\UsuarioPermisosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuarioPermisosController implements the CRUD actions for UsuarioPermisos model.
 */
class UsuarioPermisosController extends Controller
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
     * Lists all UsuarioPermisos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UsuarioPermisosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UsuarioPermisos model.
     * @param int $id_usuario_permiso Id Usuario Permiso
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_usuario_permiso)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_usuario_permiso),
        ]);
    }

    /**
     * Creates a new UsuarioPermisos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new UsuarioPermisos();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_usuario_permiso' => $model->id_usuario_permiso]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UsuarioPermisos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_usuario_permiso Id Usuario Permiso
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_usuario_permiso)
    {
        $model = $this->findModel($id_usuario_permiso);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_usuario_permiso' => $model->id_usuario_permiso]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UsuarioPermisos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_usuario_permiso Id Usuario Permiso
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_usuario_permiso)
    {
        $this->findModel($id_usuario_permiso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UsuarioPermisos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_usuario_permiso Id Usuario Permiso
     * @return UsuarioPermisos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_usuario_permiso)
    {
        if (($model = UsuarioPermisos::findOne(['id_usuario_permiso' => $id_usuario_permiso])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
