<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "f_news".
 *
 * @property integer $id
 * @property string $title
 * @property string $descr
 * @property string $text
 * @property string $img
 * @property integer $id_champ
 * @property integer $id_country
 * @property integer $id_club
 * @property integer $id_soccer
 * @property integer $counter
 * @property integer $count_comment
 * @property integer $like
 * @property string $liked_users
 * @property integer $dislike
 * @property string $dislike_users
 * @property integer $date
 * @property integer $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'f_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'descr', 'text', 'date', 'status'], 'required'],
            [['descr', 'text', 'liked_users', 'dislike_users'], 'string'],
            [['id_champ', 'id_country', 'id_club', 'id_soccer', 'counter', 'count_comment', 'like', 'dislike', 'date', 'status'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Nomi'),
            'descr' => Yii::t('app', 'Qisqacha mazmuni'),
            'text' => Yii::t('app', 'Yangilik'),
            'img' => Yii::t('app', 'Rasm'),
            'id_champ' => Yii::t('app', 'Championat'),
            'id_country' => Yii::t('app', 'Davlat'),
            'id_club' => Yii::t('app', 'Klub'),
            'id_soccer' => Yii::t('app', 'O`yinchi'),
            'counter' => Yii::t('app', 'Hisoblagich'),
            'counter' => Yii::t('app', 'Counter'),
            'count_comment' => Yii::t('app', 'Count Comment'),
            'like' => Yii::t('app', 'Like'),
            'liked_users' => Yii::t('app', 'Liked Users'),
            'dislike' => Yii::t('app', 'Dislike'),
            'dislike_users' => Yii::t('app', 'Dislike Users'),
            'date' => Yii::t('app', 'Kun vaqt'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public function getMatches()
    {
        //return $this->hasMany(Order::className(), ['customer_id' => 'id']);
        return $this->hasMany(Matches::className(), ['id_champ' => 'id']);
    }

    /**
     * @inheritdoc
     */

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->date = strtotime($this->date);
            $this->counter=$this->counter+1;
            return true;
        } else {
            return false;
        }
    }

    public static function getLast3News(){
        $model = static::findAll([1,2,3]);//->orderBy('id')->all();
        if ($model !== null) {
            return $model;
        } else {
            throw new \yii\web\NotFoundHttpException('The requested post does not exist.');
        }
    }

    public function getClubs()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'id_club']);
    }

    public function getChamp()
    {
        return $this->hasOne(Champs::className(), ['id' => 'id_champ']);
    }

    public function getCountry()
    {
        return $this->hasOne(Countries::className(), ['id' => 'id_country']);
    }

    public function getSoccer()
    {
        return $this->hasOne(Soccers::className(), ['id' => 'id_soccer']);
    }
}
