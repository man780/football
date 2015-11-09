<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \backend\models\Champs;
use \backend\models\Clubs;
use \backend\models\Countries;
use \backend\models\Soccers;
/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
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
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();

        //$img = \yii\web\UploadedFile::getInstance($model, 'img');
        //vd($model->getPrimaryKey());
        //vd($_FILES['News']);
        //echo Yii::$app->getUrlManager()->getBaseUrl();
        //die;
        $model->date = strtotime($model->date);
        $extArr = explode('/', $_FILES['News']['type']['img']);
        $ext = $extArr[1];
        //echo is_uploaded_file($_FILES['News']['tmp_name']['img']);
        //if ($dir!="" && !is_dir($path)) exec("mkdir -m ".$permissions." ".$path);
        $permissions = 0755;
        $model->img = '/static/imgNews/'.($model->getPrimaryKey()+1).'.'.$ext;
        move_uploaded_file($_FILES['News']['tmp_name']['img'], $model->img);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //$_FILES['News']['tmp_name'];
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'champsList' => Champs::find()->all(),
                'soccersList' => Soccers::find()->all(),
                'countriesList' => Countries::find()->all(),
                'clubsList' => Clubs::find()->all(),
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'champsList' => Champs::find()->all(),
                'soccersList' => Soccers::find()->all(),
                'countriesList' => Countries::find()->all(),
                'clubsList' => Clubs::find()->all(),
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
