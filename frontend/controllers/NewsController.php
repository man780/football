<?php
/**
 * Created by JetBrains PhpStorm.
 * User: murod
 * Date: 12/1/15
 * Time: 11:27 AM
 * To change this template use File | Settings | File Templates.
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\News;
use yii\data\ActiveDataProvider;

class NewsController extends Controller
{

    public $defaultAction = 'list';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionList()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->where(['status' => 1])->orderBy(['id'=>SORT_DESC]),
            /*'pagination' => [
                'pageSize' => 10,
            ],*/
        ]);

        /*if (Yii::$app->request->isAjax){
            $this->render('_loop', array(
                'dataProvider'=>$dataProvider,
            ));
            Yii::$app->end();
        } else {
            $this->render('list', array(
                'dataProvider'=>$dataProvider,
            ));
        }*/

        $this->view->title = 'News List';
        return $this->render('list', ['dataProvider' => $dataProvider]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $news = $this->findModel($id);
        $news->updateCounters(['counter' => 1]);
        return $this->render('view', [
            'model' => $news,
        ]);
    }

    public function actionLike($id){
        $news = $this->findModel($id);
        $dislike = $this->actionCanceldislike($id);
        $usersArr = [];
        if($news->liked_users == ''){
            $usersArr['users'] = [Yii::$app->user->id];
            $news->liked_users = json_encode($usersArr);
            $news->like = $news->like+1;
        }else{
            $usersArr = json_decode($news->liked_users);
            if(!in_array(Yii::$app->user->id, $usersArr->users)){
                $usersArr->users[] = Yii::$app->user->id;
                $news->liked_users = json_encode($usersArr);
                $news->like = $news->like+1;
            }
        }
        if($news->save()){
            return json_encode([$news->like, $dislike]);
        }else{
            return $news->errors;
        }
    }

    public function actionCancellike($id){
        $news = $this->findModel($id);
        if($news->liked_users != ''){
            $usersArr = json_decode($news->liked_users);
            if(in_array(Yii::$app->user->id, $usersArr->users)){
                unset($usersArr->users[array_search(Yii::$app->user->id,$usersArr->users)]);
                $news->liked_users = json_encode($usersArr);
                $news->like = $news->like-1;
            }
        }
        if($news->save()){
            return $news->like;
        }else{
            return $news->errors;
        }
    }

    public function actionDislike($id){
        $news = $this->findModel($id);
        $like = $this->actionCancellike($id);
        $usersArr = [];
        if($news->dislike_users == ''){
            $usersArr['users'] = [Yii::$app->user->id];
            $news->dislike_users = json_encode($usersArr);
            $news->dislike = $news->dislike+1;
        }else{
            $usersArr = json_decode($news->dislike_users);
            if(!in_array(Yii::$app->user->id, $usersArr->users)){
                $usersArr->users[] = Yii::$app->user->id;
                $news->dislike_users = json_encode($usersArr);
                $news->dislike = $news->dislike+1;
            }
        }
        if($news->save()){
            //return [$news->like, $news->dislike];
            return json_encode([$like, $news->dislike]);
        }else{
            return $news->errors;
        }
    }

    public function actionCanceldislike($id){
        $news = $this->findModel($id);
        if($news->dislike_users != ''){
            $usersArr = json_decode($news->dislike_users);
            if(in_array(Yii::$app->user->id, $usersArr->users)){
                unset($usersArr->users[array_search(Yii::$app->user->id,$usersArr->users)]);
                $news->dislike_users = json_encode($usersArr);
                $news->dislike = $news->dislike - 1;
            }
        }
        if($news->save()){
            return $news->dislike;
        }else{
            return $news->errors;
        }
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
