<?php

namespace app\controllers;

use app\models\Permisos;
use app\models\PermisosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermisosController implements the CRUD actions for Permisos model.
 */
class PermisosController extends Controller
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
     * Lists all Permisos models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PermisosSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Permisos model.
     * @param int $id_permiso Id Permiso
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_permiso)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_permiso),
        ]);
    }

    /**
     * Creates a new Permisos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Permisos();

        if ($this->request->isPost) {

            // echo "<pre>"; print_r($this->request->post()); exit;
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['update', 'id_permiso' => $model->id_permiso]);
            }
        } else {

            // echo "<pre>"; print_r($model->save());
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateDetalle()
    {
        
        if ($this->request->isPost) {

            $data = $this->request->post();

            $model = Permisos::find()->where(['id_rol' => $data['id_rol']])->one();
            if(empty($model))
                $model = new Permisos();
            else
                $model->id_permiso = $model->id_permiso;
                
            $model->id_rol = $data['id_rol'];
            $model->id_comuna = $data['Permisos']['id_comuna'];
            $model->id_etapa = $data['Permisos']['id_etapa'];
            $model->id_empresa = $data['Permisos']['id_empresa'];

            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['/rol/update', 'id_rol' => $model->id_rol]);
            }
        } else {

            // echo "<pre>"; print_r($model->save());
            $model->loadDefaultValues();
        }

        return $this->render('_form_detalle', [
            'model' => $model,
        ]);
    }


    /**
     * Updates an existing Permisos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_permiso Id Permiso
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_permiso)
    {
        $model = $this->findModel($id_permiso);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_permiso' => $model->id_permiso]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Permisos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_permiso Id Permiso
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_permiso)
    {
        $this->findModel($id_permiso)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Permisos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_permiso Id Permiso
     * @return Permisos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_permiso)
    {
        if (($model = Permisos::findOne(['id_permiso' => $id_permiso])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
