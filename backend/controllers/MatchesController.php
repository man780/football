<?php

namespace backend\controllers;

use Yii;
use backend\models\Matches;
use backend\models\MatchesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Clubs;
/**
 * MatchesController implements the CRUD actions for Matches model.
 */
class MatchesController extends Controller
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
     * Lists all Matches models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MatchesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Matches model.
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
     * Creates a new Matches model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Matches();

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
        $objPHPExcel = \PHPExcel_IOFactory::load(Yii::$app->getBasePath().'/../matches.xlsx');
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
        //vd($sheetData);
        foreach($sheetData as $match){
            $matchModel = new \backend\models\Matches();
            $matchModel->id_champ = 1;
            $date = strtotime($match['B']);
            $matchModel->date = $date;
            $matchModel->tur = $match['A'];
            $scoreArr = explode(':0',$match['D']);
            $matchModel->score1 = intval($scoreArr[0]);
            $matchModel->score2 = intval($scoreArr[1]);
            $teamArr = explode(' – ',$match['C']);
            $club1 = Clubs::find(['id'])->where(['name' => $teamArr[0]])->one();
            $club2 = Clubs::find(['id'])->where(['name' => $teamArr[1]])->one();
            $matchModel->id_team1 = $club1->id;
            $matchModel->id_team2 = $club2->id;
            //vd($matchModel->attributes, false);
            if(!$matchModel->save()){
                vd($matchModel->getErrors());
            }

            /*if($matchModel->save()){
                $id_club = $matchModel->primaryKey;
                $stadionsModel = new \backend\models\Stadions();
                $stadionsModel->id_team = $id_club;
                $stadionsModel->city = $clubModel->city;
                $stadionsModel->id_country = 1;
                $stadionsModel->name = $club['C'];
                $stadionsModel->capacity = intval($club['D']);
                if(!$stadionsModel->save()){
                    vd($stadionsModel->getErrors());
                }
            }*/
            //vd($clubModel->attributes, false);
            //vd($matchModel->attributes, false);
        }

    }

    /**
     * Updates an existing Matches model.
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
     * Deletes an existing Matches model.
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
     * Finds the Matches model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Matches the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Matches::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
