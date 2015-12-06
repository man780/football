<?php

namespace backend\controllers;

use Yii;
use backend\models\Clubs;
use backend\models\ClubsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClubsController implements the CRUD actions for Clubs model.
 */
class ClubsController extends Controller
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
     * Lists all Clubs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClubsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Clubs model.
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
     * Creates a new Clubs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Clubs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionExcel()
    {
        //echo (is_file(Yii::$app->getBasePath().'/../clubs.xlsx')?"ura":'-=---');
        $objPHPExcel = \PHPExcel_IOFactory::load(Yii::$app->getBasePath().'/../clubs.xlsx');
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        foreach($sheetData as $club){
            $clubModel = new Clubs();
            $clubModel->id_country = 1;
            $clubModel->name = $club['A'];
            $clubModel->city = $club['B'];
            $clubModel->status = 1;
            if($clubModel->save()){
                $id_club = $clubModel->primaryKey;
                $stadionsModel = new \backend\models\Stadions();
                $stadionsModel->id_team = $id_club;
                $stadionsModel->city = $clubModel->city;
                $stadionsModel->id_country = 1;
                $stadionsModel->name = $club['C'];
                $stadionsModel->capacity = intval($club['D']);
                if(!$stadionsModel->save()){
                    vd($stadionsModel->getErrors());
                }
            }
            vd($clubModel->attributes, false);
            vd($stadionsModel->attributes, false);
            //echo $club['A'];
        }

    }

    /**
     * Updates an existing Clubs model.
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
            ]);
        }
    }

    /**
     * Deletes an existing Clubs model.
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
     * Finds the Clubs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clubs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clubs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
