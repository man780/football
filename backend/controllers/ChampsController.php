<?php

namespace backend\controllers;

use Yii;
use backend\models\Champs;
use backend\models\ChampsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * ChampsController implements the CRUD actions for Champs model.
 */
class ChampsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'view', 'create', 'update', 'delete'],
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index', 'view', 'update', 'create'],
                        'allow' => true,
                        'roles' => ['moderator'],
                    ],
                    [
                        'actions' => ['delete', 'excel'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Champs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChampsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Champs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Champs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Champs();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($_FILES['Champs']['type']['img']!='' && $_FILES['Champs']['error']['img']==0){
                $typeArr = explode('/', $_FILES['Champs']['type']['img']);
                $type = $typeArr[1];
                $id = $model->id;
                $model->img = '/statics/images/imgChamps/'.$id.'.'.$type;
                //if(move_uploaded_file($_FILES['Champs']['tmp_name']['img'], $model->img)){
                $model->save();
                //}
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Updates an existing Champs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($_FILES['Champs']['type']['img']!=""){
            $typeArr = explode('/', $_FILES['Champs']['type']['img']);
            $type = $typeArr[1];
            $id = $model->id;
            $unlinkTypeArr = explode('.', $model->img);
            if(is_null(Yii::$app->getBasePath().'/../statics/images/imgChamps/'.$model->id.'.'.end($unlinkTypeArr))){
                $unlinkTypeArr = explode('.', $model->img);
                unlink(Yii::$app->getBasePath().'/../statics/images/imgChamps/'.$model->id.'.'.end($unlinkTypeArr));
            }
            $model->img = '/statics/images/imgChamps/'.$id.'.'.$type;
            $imgChampsDir = Yii::$app->getBasePath().'/../statics/images/imgChamps/';
            //$imgChampsDir = Yii::$app->staticsPath.'images/imgChamps/';
            move_uploaded_file($_FILES['Champs']['tmp_name']['img'], $imgChampsDir.$id.'.'.$type);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Champs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        //$model->by
            //->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Champs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Champs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Champs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
