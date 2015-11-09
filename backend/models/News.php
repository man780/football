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
 * @property integer $date
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
            [['title', 'descr', 'text', 'date'], 'required'],
            [['descr', 'text'], 'string'],
            [['id_champ', 'id_country', 'id_club', 'id_soccer', 'counter'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['img'], 'safe'],
            [['img'], 'file'], // is 'jpg,jpeg,gif,png'
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
            'date' => Yii::t('app', 'Kun vaqt'),
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            $this->counter=$this->counter+1;
            return true;
        } else {
            return false;
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
